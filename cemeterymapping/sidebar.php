<style type="text/css">
 .stretch {
  width: auto;
  height: auto;
 }
  .stretch img {
    width: 100%;
    height: 100%;
  }
</style>
<!---search --> 
<div class="row" style="font-size: 12px">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
     <form action="index.php?q=person" method="post">
       <div class="input-group custom-search-form">
            <input type="search" class="form-control" name="search" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" id="btnsearch" name="btnsearch" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
      </form> 
      <small>ex : Firstname / Lastname  </small>
    </div> 
</div> 
<!-- category -->
     <div class="panel panel-default"> 
        <div class="panel-body">
        <div class="list-group">
         <div class="well well-sm "><b> Location </b> </div>
            <ul >
                <li><a href="index.php?q=person&location=BUENAVISTA LOOC CEMETERY">Roman Catholic Memorial Gardens</a></li>
                <li><a href="index.php?q=person&location=PUNTA LOOC CEMETERY">Minglanilla Celestial Cemetery</a></li> 
             </ul>
          </div> 
       </div> 
    </div> 
   <div class="panel panel-default stretch"> 
    <div class="panel-body">
    <div class="list-group">
     <div class="well well-sm "><b> Map </b> </div>
        
              <img src="img/map.png">
            
      </div> 
   </div> 
</div> 
  </div>
</div> 

 