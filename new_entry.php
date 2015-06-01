
<div role="tabpanel">

  <!-- Nav tabs -->
  <div class="col-md-2" style="color: red;">

  <ul class="nav nav-pills nav-stacked" role="tablist">
    <li role="presentation" class="active"> <a href="#new_travels" aria-controls="new_travels" role="tab" data-toggle="tab"> <span class="badge"> 1 </span> Travels</a></li>
    <li role="presentation"><a href="#new_education" aria-controls="new_education" role="tab" data-toggle="tab"> <span class="badge"> 2 </span> Education</a></li>
    <li role="presentation"><a href="#new_work" aria-controls="new_work" role="tab" data-toggle="tab"> <span class="badge"> 3 </span> Work</a></li>
    <li role="presentation"><a href="#new_personal" aria-controls="new_personal" role="tab" data-toggle="tab"> <span class="badge"> 4 </span> Personal</a></li>
    <li role="presentation"><a href="#new_category" aria-controls="new_category" role="tab" data-toggle="tab"> <span class="badge"> 5 </span> Custom</a></li>
  </ul>

  </div>

  <!-- Tab panes -->
  <div class="tab-content" class="col-md-10">
    <div role="tabpanel" class="tab-pane active" id="new_travels"> <?php include 'new_entry_travels.php';?> </div>
    <div role="tabpanel" class="tab-pane" id="new_education"> <?php include 'new_entry_education.php';?> </div>
    <div role="tabpanel" class="tab-pane" id="new_work"> <?php include 'new_entry_work.php';?> </div>
    <div role="tabpanel" class="tab-pane" id="new_personal"> <?php include 'new_entry_personal.php';?> </div>
    <div role="tabpanel" class="tab-pane" id="new_category"> <?php include 'new_entry_category.php';?> </div>
  </div>

</div>


