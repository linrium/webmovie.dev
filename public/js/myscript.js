$('.alert').delay(3000).slideUp();

function confirmDelete(message) {
    console.log(message);
    if(window.confirm(message)) {
        return true;
    }
    return false;
}

function tokenfield(data) {
    var engine = new Bloodhound({
        local: data,
        datumTokenizer: function(d) {
            return Bloodhound.tokenizers.whitespace(d.label); 
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace    
    });

    engine.initialize();

    $('#tokenfield-typeahead').tokenfield({
        typeahead: {
            source: engine.ttAdapter(),
            displayKey: 'label'
        }
    });
}

