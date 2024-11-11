Exercice 1
Dans la page p1.php développer le formulaire suivant :
Ce formulaire conduit à la page p2.php qui affiche les données saisies.
Rappelons que pour récupérer une variable dans un formulaire écrite de cette manière :
<Input Type="text" Name="var1">
On utilise dans la page destination la syntaxe suivante :
$X = $_POST["var1"] OU $X = $_Get["var1"]

Exercice 2
Créer un formulaire comprenant un groupe de champs ayant pour titre "coordonnées
patient". Le groupe doit permettre la saisie du numéro de sécurité sociale (8 chiffres), de la
caisse (CNSS, CNRPS), du nom, du prénom et de l’adresse. Les données sont ensuite traitées
par un fichier PHP séparé récupérant les données et les affichant dans un tableau HTML
