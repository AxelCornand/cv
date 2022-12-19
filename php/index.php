<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Curiculum vitae</title>
</head>
<body>
    <?php require './inc.php' ?>
    <header>

    </header>
    <main>
        <section class="skills">
            <h1><strong>Axel Cornand</strong></h1>
            <h2><strong>Développeur Web "back-end"!</strong></h2>
            <article class="skill">
                <h3><strong>Soft-Skills</strong></h3>
                <ul>
                   <?php for ( $indexSoftSkill = 0 ; $indexSoftSkill < count( $softSkills ) ; $indexSoftSkill++ ){ ?>
                    <li>
                    <?php 
                        echo $softSkills[ $indexSoftSkill ]; 
                    ?>
                    </li>
                    <?php }  ?>
                </ul>
            </article>
            <article class="skill">
            <h3><strong>Skill</strong></h3>
                <ul>
                   <?php for ( $indexSkill = 0 ; $indexSkill < count( $skill ) ; $indexSkill++ ){ ?>
                    <li>
                    <?php 
                        echo $skill[ $indexSkill ]; 
                    ?>
                    </li>
                    <?php }  ?>
                </ul>
            </article>
            <article class="projet">
                <h3><strong>Projets</strong></h3>
                <a href=<?php echo $gitLinks ?> target="blank">AxelCornand-Github</a>

            </article>
            <article class="contact">
                <h3><strong>Contact!</strong></h3>
                    <p><?php echo $contact[0] ?></p>
                    <p><?php echo $contact[1] ?></p>
                    <a href=<?php echo $contact [2] ?> target="blank">@linkedin</a>     
            </article>
        </section>
    </main>
</body>
</html>
