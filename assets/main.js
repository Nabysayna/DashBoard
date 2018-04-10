$(function(){
    console.log('Begin 1');
    var typeP="";
    var idP=0;
})

function validerRechercherModal(type,id){
	typeP=type;
	idP=id;
    $('.saisir').val('');
    $('#tbody').html('');
    $('#modalRechercherTitle').text("RECHERCHE "+type+" à la ligne "+id);
    $('#modalRechercher').modal('show');
}

function getdatas(data){
    rec = data.split("  ");
    if (data.match("--")){
        $('#tbody').html('');
        rec.forEach(function(value){
            traitementre(value);
        });
    }
}

function traitementre(rec) {
    var recunik = rec.split("--")[0].split("/");
    var tab= rec.split("--");
    var id_recunik = rec.split("--")[1];

    var chaine = "<tr id=\"roww-"+id_recunik+"\">";

    if(recunik[0]==1){
        chaine = chaine+"<td class=\"op\">depot</td>";
    }
    if(recunik[0]==2){
        chaine = chaine+"<td class=\"op\">retrait</td>";
    }
    if(recunik[0]==3){
        chaine = chaine+"<td class=\"op\">rac</td>";
    }
    if(recunik[0]==5){
        chaine = chaine+"<td class=\"op\">vente de credit</td>";
    }
    if(recunik[0]==1){
        chaine = chaine+"<td class=\"numm\">"+recunik[2]+"</td>";
    }else{
        chaine = chaine+"<td class=\"numm\">"+recunik[1]+"</td>";
    }
    if(recunik[0]==1){
        chaine = chaine+"<td class=\"mntt\">"+recunik[1]+"</td>";
    } else{
        chaine = chaine+"<td class=\"mntt\">"+recunik[2]+"</td>";
    }
    chaine = chaine+"<td class=\Date\">"+tab[2]+"</td>";
    chaine = chaine+"<td><i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color:#098a12;\"></i></td>";
    chaine = chaine+"<td ><button id=\"buttonn-"+id_recunik+"\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i></button></td>";
    chaine = chaine+"</tr>";

    $('#tbody').append(chaine);
}

function validerRechercherBtn(){
    console.log("validerRechercherBtn"+typeP+" "+idP);
    if( ($("#saisirnumero").val().trim().length!=0) && ($("#saisirmontant").val().trim().length!=0)){
        if(typeP.match("OM")){
            $.post(baseUrl+"/ajax/rechercheom", {
					num: $("#saisirnumero").val().trim(),
					mnt:$("#saisirmontant").val().trim(),
					idp:idP
				}, function(datas){
                getdatas(JSON.parse(datas).message.trim());
            });
        }else{
            $.post(baseUrl+"/ajax/rechercheom", {
                num: $("#saisirnumero").val().trim(),
                mnt:$("#saisirmontant").val().trim(),
                idp:idP
            }, function(datas){
                getdatas(JSON.parse(datas).message.trim());
            });
        }
    }else {
        console.log("champ vide")
    }
}

function validerRemonterModal(type,id){
    console.log("validerRemonter"+type+" "+id);
    $('#modalRemonterTitle').text("REMONTER "+type+" à la ligne "+id)
    $('#modalRemonter').modal('show');
}

function validerReinitialiserModal(type,id){
    console.log("validerRechercher "+type+" "+id);
    $('#modalReinitialiserTitle').text("REINITIALISER "+type+" à la ligne "+id)
    $('#modalReinitialiser').modal('show');
}

function hoverorange(){
    $("body").css('background-color','orange')
}
function onmouseorange(){
    $("body").css('background-color','white')
}
function hovertigo(){
    $("body").css('background-color','green')
}
function onmousetigo(){
    $("body").css('background-color','white')
}