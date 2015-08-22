<?php
	// Script Sites/index
	
	$most_old_proj = time();
	$most_new_proj = 0;
	
	$resdata = array();
	try {
			$c = new SoapClient(users::getServer());
			$gdata = $c->mc_projects_get_user_accessible(users::getLogin(), users::getPassword());
			$connected = true;
			$data = array();
			
			
			// les issues pour chaque projet
			foreach($gdata as $key=>$val) {
				$data = $c->mc_project_get_issues(
					users::getLogin(), 
					users::getPassword(), $val->id);
				$mostrecent = 0;
			
				// chaque issue
				$issues_count = array();
				foreach($data as $v) {
				
					//echo($v->status->name);
					
					if (isset($issues_count[ $v->status->name ] )) {
						$issues_count[ $v->status->name ]++;
					} else {
						$issues_count[ $v->status->name ]=1;
					}
					
					
					if (strtotime($v->last_updated)	> $mostrecent) {
						$mostrecent = strtotime($v->last_updated);
					}
					
					
					if (strtotime($v->last_updated)	> $most_new_proj) {
						$most_new_proj = strtotime($v->last_updated);
					}
				
				}
			
			
				if ($mostrecent	< $most_old_proj) {
					$most_old_proj = $mostrecent;
				}
			
			
				$tmpdata = $val;
				$tmpdata->issues = $data;
				$tmpdata->issues_count = $issues_count;
				$tmpdata->issues_count_total = 0;
				foreach($issues_count as $chiffre) {
					$tmpdata->issues_count_total += $chiffre;
				}
				$tmpdata->issues_count['All'] = $tmpdata->issues_count_total;
				
				$tmpdata->verylastupdate = $mostrecent;
				$tmpdata->deltatime = time() - $mostrecent;
				
				
				
				$resdata[] = $tmpdata;
				$tmpdata = array();
			}
			
		} catch (Exception $e){
			$response = array();
			$connected = false;
			users::logout();
			header("Location: index.php?controller=users&action=login");
		}
	
	$i = 0;
	
	$amplitude_ts = $most_new_proj - $most_old_proj;

	$total_wnote = 0;

	while (isset($resdata[$i])) {
		$resdata[$i]->wnote = (int)($resdata[$i]->deltatime / $amplitude_ts * 6);
		
		if ($resdata[$i]->wnote > 6) {
			$resdata[$i]->wnote = 6;
		}
		
		$total_wnote+=$resdata[$i]->wnote;
		$i++;
	
	}
	
	
	$_SESSION['BlockMeteoGenerale'] = (int)($total_wnote / count($resdata));

	
	$data = $resdata;
	
	//print_r ($data);

	
	
	
/*
	
Array
(
    [0] => stdClass Object
        (
            [id] => 6
            [name] => Chuck Norris Facts Fr
            [status] => stdClass Object
                (
                    [id] => 10
                    [name] => development
                )

            [enabled] => 1
            [view_state] => stdClass Object
                (
                    [id] => 10
                    [name] => public
                )

            [access_min] => stdClass Object
                (
                    [id] => 10
                    [name] => viewer
                )

            [file_path] => 
            [description] => 
            [subprojects] => Array
                (
                )

        )

    [1] => stdClass Object
        (
            [id] => 5
            [name] => Ganzfeld
            [status] => stdClass Object
                (
                    [id] => 10
                    [name] => development
                )

            [enabled] => 1
            [view_state] => stdClass Object
                (
                    [id] => 10
                    [name] => public
                )

            [access_min] => stdClass Object
                (
                    [id] => 10
                    [name] => viewer
                )

            [file_path] => 
            [description] => 
            [subprojects] => Array
                (
                )

        )

	*/

