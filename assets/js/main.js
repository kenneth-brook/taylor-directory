var options = {
    valueNames: ['name', 'material']
};

var featureList = new List('piece-search', options);

$('#filter-material').change(function () {
    var selection = this.value;
    console.log(selection);

    if (selection) {
        featureList.filter(function(item) {
            return (item.values().material == selection);
        });
    } else {
        featureList.filter();
    }
});

$('#filter-none').click(function() {
  featureList.filter();
  return false;
});

$(document).ready(function() {
    featureList.sort('name', { asc: true });
});

