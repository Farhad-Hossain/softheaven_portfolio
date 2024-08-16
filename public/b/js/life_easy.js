function getJson(url, method='GET', data={}) {
    return JSON.parse($.ajax({
        type: method,
        url: url,
        data: data,
        dataType: 'json',
        global: false,
        async: false,
        success: function (data) {
            return data;
        }
    }).responseText);
}

function riseModal(title="", component)
{
  $(`#base-modal-title`).text(title);
  $(`#baseModal #modal-body`).empty().append( $(`#`+component).html() );
  $(`#baseModal`).modal('show');
}

$(`.modal-view-link`).click((event)=>{
  event.preventDefault();

  element = event.target;
  url = $(element).attr('href');
  response = getJson(url, 'GET', {});

  $(`#baseModal`).find(`#base-modal-title`).html( $(element).attr('modal-title') );
  $(`#baseModal`).find('.modal-body').html(response.html_content);
  $(`#baseModal`).modal('show');
})
