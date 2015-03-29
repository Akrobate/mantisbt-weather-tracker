<table width="70%" border="0">
<tr><td>
<img src="https://lh3.googleusercontent.com/-D2RFOMIHxbo/UssGAjUVVgI/AAAAAAAABu4/d0jco9VaI3U/w250-h150-no/weather_tracker.png"  />
</td><td>
<img src="https://lh5.googleusercontent.com/-7BFLU5buFjA/UssFjdKSQdI/AAAAAAAABuo/fN3b_LItqR8/w655-h384-no/Capture+du+2014-01-05+18%253A41%253A55.png" width="350px" />
</td><td>
<img src="https://lh5.googleusercontent.com/-IvRMwYo7ov4/UssFjUd0qdI/AAAAAAAABuk/3M5FEg4b5l4/w532-h384-no/Capture+du+2014-01-05+18%253A42%253A19.png" width="350px" style="float:left" />
</td></tr>
</table>


==Introduction==

Le petit projet MantisBT Weather Tracker est un simple tableau de bord pour MantisBT. Ce script est codé sous forme d'un client qui interroge une instance Mantis en SOAP. Vous pouvez utiliser directement vos logins / mot de passe de votre mantis pour obtenir la vue Météo de votre mantis avec MantisWeatherTracker


==L'idée==

Le projet weather tracker est né d'une réelle nécessite de se faire une idée aussi précise que rapide de l'état d'avancement de tous ses projets. Le script MantisBT propose une importante quantité de rapports, cela étant dit tout le monde aura remarqué l'aspect très "technique" (voir austère) des écrans de mantisBT.
Ce tableau de bord qui score l'avancement de chaque projet et le représente sous une forme ludique et très parlante a tous (la météo) vous rendra le clin d’œil rapide aux avancements mantis plus agrèable et ergonomique.


==Évolutions et objectifs==

A l'origine le projet MantisBT WeatherTracker est destiné aux mobiles. En effet ce genre de tableaux de bords très épurés s'adaptent bien a la vie mobile des logiciels. En effet ce tableau de bord est presque plus un reminder qu'un véritable outil de monitoring projet. Comprenez par "reminder" un pense-bête qui vous rappellera de ne pas laisser des projets prendre la poussière ou au contraire qui vous poussera a statuer sur un projet donné et prendre la bonne décision (remise en haut de la pile, archivage, ou abandon et suppression du projet)

Ce script écrit en php est un prototype fonctionnel de ce que sera l'application Mobile de Mantis Weather Tracker.

 * Portage du script sur Android


==A propos du projet==

Caractéristiques techniques du projet MantisBT Weather Tracker

 * Projet codé en PHP (php5)
 * Utilise le protocole SOAP pour communiquer avec votre instance MantisBT
 * Pas de base de donnés. Le script ne nécessite aucune base de donnés pour fonctionner
 * Architecture MVC
 * Pas de configuration nécessaire
