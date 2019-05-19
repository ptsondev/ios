jQuery(document).ready(function($){	  
    fullURL = window.location.protocol + "//" + window.location.host;
    ajaxPath = fullURL + '/ajax.php';
    $('#btnShowSubMenu').click(function(){        
       $('#sub-menu').toggleClass('show');
       return false;
    });
    
    pid=-1;    
    $('#btnSaveNewP').click(function(){        
        project =  prepareProjectInfo();
        project.new = true;
        
        var customer={};
        customer.new = true;
        customer.name = '';//customer.name = $('#cName').val();
        customer.phone = $('#cPhone').val();
        customer.email = $('#cEmail').val();
        customer.note = '';   //customer.note = $('#cNote').val();   
        
        jQuery.ajax({
            method: "POST",
            async: false,
            url: ajaxPath,            
            data: {action: "addNewProject", project:project, customer:customer},
            success: function (response) {                	
                window.location.reload(true);
                //console.log(response);
            }
        });       
    });       
    
    $('#btnUpdateP').click(function(){
        project =  prepareProjectInfo();
        project.new = false;
        project.pid = pid;
        
        var customer={};
        customer.new = false;
        customer.cid = $('#'+pid).data('cid');
        customer.name = $('#cName').val();
        customer.phone = $('#cPhone').val();
        customer.email = $('#cEmail').val();
        customer.note = $('#cNote').val(); 
        
        jQuery.ajax({
            method: "POST",
            async: false,
            url: ajaxPath,            
            data: {action: "updateProject", project:project, customer:customer},
            success: function (response) {         
                //console.log(response);
                window.location.reload(true);
            }
        });     
    });
    
    function prepareProjectInfo(){
        var project={};        
        project.name = $('#pName').val();
        project.summary = $('#pSummary').val();
        project.category = [];
        $('.cCat:checked').each(function() {
            project.category.push($(this).attr('value'));
        });
        project.status = $('#pStatus').val();
        project.steps = $('#pSteps').val();        
        project.price_out = 0;
        if($('#pPriceOut').val()){
            project.price_out = removeFormatNumber($('#pPriceOut').val());            
        }
        //project.price_out= project.price_out.split('.').join("");
        project.contract = $('#pContract').val();        
        project.assigned = $('#pAssigned').val();        
        
        return project;
    }
    // click any tr, active it
    $('#list-projects tr').click(function(){
       pid = $(this).attr('id');       
       showSeletedRow(pid);
       selectedRow = $(this).index()+1;       
    });
    
    function showSeletedRow(pid){          
        pid = '#'+pid;        
        $('#list-projects tr').removeClass('active');
        $(pid).addClass('active');       
       
       $('#pName').val($(pid).find('td:nth-child(2)').html());
       $('#pSummary').val($(pid).data('summary'));
       
       $('.cCat').removeAttr('checked');
       if($(pid).data('category')==1){
           $('.cCat[value=1]').prop('checked', true);
       }
       if($(pid).data('category')==2){
           $('.cCat[value=2]').prop('checked', true);
       }
       if($(pid).data('category')==0){
           $('.cCat, ').prop('checked', true);
       }
       
       $('#pStatus').val($(pid).data('status'));
       $('#pSteps').val($(pid).find('.ipSteps').val());
       $('#pContract').val($(pid).data('contract'));
       $('#pPriceOut').val($(pid).find('td:nth-child(6)').html());
       $('#pAssigned').val($(pid).data('assigned'));
       
       $('#cName').val($(pid).data('cname'));
       $('#cEmail').val($(pid).data('cemail'));
       $('#cPhone').val($(pid).data('cphone'));
       $('#cNote').val($(pid).data('cnote'));
    }
    
    
    if($('#list-projects').length){
        var max = $('#list-projects tr').length;        
        var selectedRow=1;
        $(document).on('keydown', function(e) {            
            if(e.which==38){ //up
                if(selectedRow>2){                    
                    selectedRow--;   
                    pid = $('#list-projects tr:nth-child('+selectedRow+')').attr('id');                               
                    showSeletedRow(pid);
                }
            }
            if(e.which==40){ //down
                if(selectedRow<max){                    
                    selectedRow++;
                    pid = $('#list-projects tr:nth-child('+selectedRow+')').attr('id');                                        
                    showSeletedRow(pid);
                }
            }
        });
    }    
    
    $('#btnReset').click(function(){
        $('#pName').val('');
        $('#pSummary').val('');
        $('#project-detail .cCat').prop('checked', false); //
        $('#pStatus').val(0);
        $('#pSteps').val('');
        $('#pPriceOut').val('');
        $('#pContract').val('');
        $('#cName').val('');
        $('#cPhone').val('');
        $('#cEmail').val('');
        $('#cNote').val('');
        $('#list-projects tr').removeClass('active');
        pid=-1;        
    });
    
    $('#btnGenContract').click(function(){
        category = [];
        $('.cCat:checked').each(function() {
            category.push($(this).attr('value'));
        });        
        
        if(category.length===0){
            alert('Chon nhom dich vu');
        }else{
            jQuery.ajax({
                method: "POST",
                async: false,
                url: ajaxPath,            
                data: {action: "genNewContract", category:category, pid:pid},
                success: function (contract) { 
                    $('#pContract').val(contract);
                }
            });    
        }
    });
    
    $('#btnExpand').click(function(){
        $(this).toggleClass('zoom');
        $('#pSteps').toggleClass('zoom');
    });
    
    $('.txtPrice').keyup(function(){
           nscl = removeFormatNumber($(this).val()); 
           $(this).val(formatNumber(nscl));
        });
        
        
    $("#dialogLoiLo").dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 200
        },
        hide: {
            effect: "explode",
            duration: 200
        }
    });    
    
    $('#btnPhatSinh').click(function(){        
        $( "#dialogLoiLo" ).dialog( "open" );
        var curPID =  pid.substring(1, pid.length);
        jQuery.ajax({
            method: "POST",
            async: false,
            url: ajaxPath,            
            data: {action: "getLoiLo", pid:curPID},
            success: function (response) {                	
                //console.log(response);
                $('#loiloContent').html(response);
            }
        });   
    });  
        
});


jQuery(window).load(function($) {
	
});

function formatNumber (num) {
    num = num.toString();
    num = num.replace(/\./g, '');
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}

function removeFormatNumber(num){
    if(!num){
        return 0;
    }
    return parseInt(num.replace(/\./g, ''));
}