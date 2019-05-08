
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Profile Page</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
             
                <div class="row">
                    
                  
                    <div class="col-md-8 col-xs-12">
                    <?php echo form_open('home/insertObject'); ?>
                        <div class="white-box">
                            <div class="form-horizontal form-material">                        
                            <div class="form-group" style="margin-left:300px;">
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadios" id="inlineCheckbox1" value="option1"  onClick="javascript:checkBoxFunction('Categorie')"> Produit
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadios" id="inlineCheckbox2" value="option2"  onClick="javascript:checkBoxFunction2('Categorie','Produit','select')"> Categorie
                                </label>
                            </div>
                           
                                <div class="form-group">
                                    <label class="col-md-12">Nom Produit</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Produit1" class="form-control form-control-line" id="Produit" name="ProduitName"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Categorie</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Produit1" class="form-control form-control-line" id="SelectName" name="SelectName"> </div>
                                </div>
                               
                               
                                <div class="form-group">
                                    <label class="col-md-12">Nom Categorie</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Categorie" class="form-control form-control-line" id="Categorie" name="CategorieName"> </div>
                                </div> 

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">INSERER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>