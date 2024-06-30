<?php

use yii\helpers\Html;
use yii\helpers\Url;

echo Html::button('Default', ['class' => 'btn btn-default']);
echo Html::button('Primary', ['class' => 'btn btn-primary']);
echo Html::button('Success', ['class' => 'btn btn-success']);
echo Html::button('Info', ['class' => 'btn btn-info']);
echo Html::button('Warning', ['class' => 'btn btn-warning']);
echo Html::button('Danger', ['class' => 'btn btn-danger']);
echo Html::button('Link', ['class' => 'btn btn-link']);
?>


<!-- align items -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Align Items Example</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex align-items-center" style="height: 200px;">
  <div class="p-2">Item 1</div>
  <div class="p-2">Item 2</div>
  <div class="p-2">Item 3</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->

<!-- justify content -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Justify Content Example</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex justify-content-between">
  <div class="p-2">Item 1</div>
  <div class="p-2">Item 2</div>
  <div class="p-2">Item 3</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Flex Row Example</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex flex-row">
  <div class="p-2">Item 1</div>
  <div class="p-2">Item 2</div>
  <div class="p-2">Item 3</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->

<!-- 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Flex Row Example</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</body> -->
<!-- </html>  -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Tabs</title>
</head>
<body>

<div class="container mt-5">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1-content" role="tab" aria-controls="tab1-content" aria-selected="true">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="tab2-content" role="tab" aria-controls="tab2-content" aria-selected="false">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab3-tab" data-toggle="tab" href="tab3-content" role="tab" aria-controls="tab3-content" aria-selected="false">Third</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1-content" role="tabpanel" aria-labelledby="tab1-tab">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="tab-pane fade" id="tab2-content" role="tabpanel" aria-labelledby="tab2-tab">
                    <h5 class="card-title">Tab 2 Title</h5>
                    <p class="card-text">Content for the second tab.</p>
                    <a href="#" class="btn btn-secondary">Go elsewhere</a>
                </div>
                <div class="tab-pane fade" id="tab3-content" role="tabpanel" aria-labelledby="tab3-tab">
                    <h5 class="card-title">Tab 3 Title</h5>
                    <p class="card-text">Content for the third tab.</p>
                    <a href="#" class="btn btn-success">Go another place</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html> -->

<?php

// use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'Bootstrap Tabs in Yii2';
$this->params['breadcrumbs'][] = $this->title;
?>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1-content" role="tab" aria-controls="tab1-content" aria-selected="true">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2-content" role="tab" aria-controls="tab2-content" aria-selected="false">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3-content" role="tab" aria-controls="tab3-content" aria-selected="false">Third</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1-content" role="tabpanel" aria-labelledby="tab1-tab">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="tab-pane fade" id="tab2-content" role="tabpanel" aria-labelledby="tab2-tab">
                    <h5 class="card-title">Tab 2 Title</h5>
                    <p class="card-text">Content for the second tab.</p>
                    <a href="#" class="btn btn-secondary">Go elsewhere</a>
                </div>
                <div class="tab-pane fade" id="tab3-content" role="tabpanel" aria-labelledby="tab3-tab">
                    <h5 class="card-title">Tab 3 Title</h5>
                    <p class="card-text">Content for the third tab.</p>
                    <a href="#" class="btn btn-success">Go another place</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo Yii::getAlias('@webroot/images/events/') . '---------'; ?>
<?php echo Url::to('@web/images') ; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
// Register necessary Bootstrap and jQuery assets if not already included
$this->registerJsFile('https://code.jquery.com/jquery-3.5.1.slim.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
