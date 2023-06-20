<?php

$utilisateurs = [
    ["nom" => "Dupond", "prénom" => "Jean", "age" => 26],
    ["nom" => "Simpson", "prénom" => "Lisa", "age" => 22],
    ["nom" => "Durant", "prénom" => "Jacques", "age" => 29],
];
// echo $utilisateurs[0]["nom"];

foreach ($utilisateurs as $key => $utilisateur){ ?>
    <p><?php echo $utilisateur["nom"]." " .$utilisateur["prénom"]; ?></p>
<?php }

?>

<section id="utilisateurs">
    <?php foreach($utilisateurs as $key => $utilisateur){?>
        <article class="utilisateur">
            <h2><?php echo$utilisateur["nom"]." ".$utilisateur["prénom"]; ?></h2>
            <h3>Age : <?php echo$utilisateur["age"] ?> ans</h3>
        </article>
    <?php } ?> 
</section>