
<?php require 'views/partials/header.view.php'; ?>


<div class="main">
    <h1 class="mb-4 text-center">Curriculum vitae</h1>

    <h2 class="mb-4 fst-italic">Bio</h2>

    <div class="row section">

        <div class="col-1">
        </div>

        <div class="col-11">
            <div class="row">
                <div class="col-4 pt-4 info">
                    <?php foreach($vars["bio"]["ivar"] as $ivar): ?>
                    <div class="flags mb-2">
                        <label><?= $ivar["label"]?></label>: <?= $ivar["value"]?>
                    </div>
                    <?php endforeach ?>
                </div>
                <div class="col-3 ms-3 ps-3 border-start border-secondary">
                    <img class="img-fluid" src="/public/img/me.jpg" alt="pic of me"> 
                </div>
            </div>
        </div>

    </div>

    <h2 class="mb-5 fst-italic">Education</h2>

    <div class="row section">

        <div class="col-1">
        </div>

        <div class="col-10">

            <?php foreach($vars["edu"]["education"] as $education): ?>
                <div class="row">
                    <div class="col-2 dates">
                        <?= $education["startDate"] ?>
                        <?php if ($education["endDate"])
                                {echo ' – ', $education["endDate"];} ?>
                    </div>
                    <div class="col-10 mb-3 info">
                        <b><?= $education["name"]?></b><?php if ($education["diploma"])
                            {echo ' (' . $education["diploma"] . ')';} ?>,
                        <?php if ($education["time"])
                            {echo $education["time"], ',';} ?>
                        <?php if ($education["subjects"])
                            {echo $education["subjects"], ', ';} ?>
                        <i><?= $education["institution"]?></i>
                    </div>
                </div> 
            <?php endforeach ?>

        </div>

    </div>

    <h2 class="mb-5 fst-italic">Work experience</h2>

    <div class="row section">

        <div class="col-1">
        </div>

        <div class="col-10">

    <?php foreach($vars["job"]["jobs"] as $jobs): ?>
            <div class="row">
                <div class="col-2 dates">
                            <?= $jobs["startDate"] ?>
                            <?php if ($jobs["endDate"])
                                {echo ' – ', $jobs["endDate"];} ?>
                            <?php if ($jobs["startDate2"])
                                {echo ' & ', $jobs["startDate2"];} ?>
                            <?php if ($jobs["endDate2"])
                                {echo ' – ', $jobs["startDate2"];} ?>
                </div> 
                <div class="col-10 mb-3">
                    <p class="fw-bold mb-0 info">
                        <?= $jobs['employer'] ?>, <?= $jobs['location'] ?>, <?= $jobs['jobTitle'] ?>:
                    </p>
                    <div class="description">
                        <?= $jobs['jobDescription'] ?>
                    </div>
                </div> 
            </div>
    <?php endforeach ?>
        </div>
    </div>

    <h2 class="mb-5 fst-italic">Extracurricular activities</h2>


    <div class="row section">

        <div class="col-1">
        </div>

        <div class="col-10">

        <?php foreach($vars["extra"]["extracurricular"] as $extracarriculars): ?>
            <div class="row">
                <div class="col-2 dates">
                    <?= $extracarriculars["startDate"] ?>
                    <?php if ($extracarriculars["endDate"])
                        {echo ' – ', $extracarriculars["endDate"];} ?>
                </div> 
                <div class="col-10 mb-3">
                    <p class="fw-bold mb-0 info">
                        <?= $extracarriculars['organization'] ?>, <?= $extracarriculars['location'] ?>,
                        <?= $extracarriculars['functionTitle'] ?>:
                    </p>
                    <div class="description">
                    <?= $extracarriculars['functionDescription'] ?>
                    </div>
                </div>
            </div> 
        <?php endforeach ?>
        </div>
    </div>

    <h2 class="mb-5 fst-italic">Languages</h2>

    <?php foreach($vars["skills"]["skills"]["languages"] as $languages): ?>

    <div class="row">
        <div class="col-1">
        </div>

    
        <div class="col-11">

            
            <div class="flags">
                <label><?= $languages["label"]?></label>: <?= $languages["value"]?>
            </div>
        </div>
    </div>

            <?php endforeach ?>

</div>

<?php require 'views/partials/footer.view.php' ?>