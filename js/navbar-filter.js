function selectedFilter() {
    var selectElement = document.getElementById('inputSelect');
    var selectedValue = selectElement.value;
    if(selectedValue == 1){
        document.getElementById('table_filter2').className = "table table-responsive resume-text hidden";
        document.getElementById('table_filter1').className = "table table-responsive resume-text";
    }else if(selectedValue == 2){
        document.getElementById('table_filter2').className = "table table-responsive resume-text";
        document.getElementById('table_filter1').className = "table table-responsive resume-text hidden";
    }
}

