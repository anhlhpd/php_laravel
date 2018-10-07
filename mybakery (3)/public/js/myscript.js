$('#check-all').click(function () {
    $('.check-item').prop('checked', $(this).is(':checked'));
});
$('#btn-apply').click(function () {
    switch ($('#select-action').val()){
        case '0':
            alert('Please choose an action before click "Apply".');
            break;
        case '1':
            processDelete();
            break;
        case '2':
            processAnother();
            break;
        default:
            alert('Invalid action.');
            break;
    }
})
function processDelete(){
    var arrayId = [];
    $('.check-item:checked').each(function(index, item) {
        arrayId.push(item.closest('.row').id.replace('row-item-', ''));
    });
    if(arrayId.length == 0){
        alert('Please choose at least 1 item.');
        return;
    }
    if (confirm('Are you sure want to delete these bakeries?')) {
        $.ajax({
            method: 'POST',
            url: '/admin/bakery/destroy-many',
            data: {
                // Nếu để csrf_token thì không được vì file này là file js chứ không phải php
                '_token': $('meta[name="csrf-token"]').attr('content'),
                'ids': arrayId
            },
            success: function (resp) {
                $('#messageSuccess').text('Action success!');
                $('#messageSuccess').removeClass('d-none');
                // Mong muốn gọi lên sv 1 lần nữa để lấy danh sách mới.
                for (var i = 0; i < arrayId.length; i++) {
                    $('#row-item-' + arrayId[i]).remove();
                }
                // Kiểm tra lại số lượng bản ghi, nếu không còn sản phẩm thì reload.
                if($('.check-item').length == 0){
                    setTimeout(function(){
                        window.location.reload(1);
                    }, 3*1000);
                }
            },
            error: function () {
                $('#messageError').removeClass('d-none');
                $('#messageError').text('Action fails! Please try again later!');
            }
        });
    }
}

function processAnother(){
    alert('Coming soon! Please try again later.');
}

// $('#exampleModal').on('show.bs.modal', function (event) {
//     var button = $(event.relatedTarget) // Button that triggered the modal
//     var recipient = button.data('whatever') // Extract info from data-* attributes
//     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
//     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
//     var modal = $(this)
//     modal.find('.modal-title').text('New message to ' + recipient)
//     modal.find('.modal-body input').val(recipient)
// })

$('.btn-quick-edit').click(function () {
    var id = $(this).closest('.row').attr('id').replace('row-item-', '');
    $.ajax({
        method: 'GET',
        url: '/admin/bakery/get-json/' + id,
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (resp) {
            $('form[name="edit-bakery-form"] input[name="name"]').val(resp.item.name);
            $('form[name="edit-bakery-form"] input[name="price"]').val(resp.item.price);
            $('form[name="edit-bakery-form"] img').attr('src', resp.item.images);
            $('form[name="edit-bakery-form"] input[name="images"]').val(resp.item.images);
            // console.log(resp.item.name);
        },
        error: function () {
            alert('error');
        }
    });
    $('#modal-edit').modal();
    return false;
});

$('#btn-update-bakery').click(function () {
    var name = $('form[name="edit-bakery-form"] input[name="name"]').val();
    var price = $('form[name="edit-bakery-form"] input[name="price"]').val();
    var images = $('form[name="edit-bakery-form"] input[name="images"]').val();
    var id = $('form[name="edit-bakery-form"] id').val();
    $.ajax({
        url: 'admin/bakery/update-json/' + id,
        method: 'PUT',
        data: '?name='+ name + '&price=' + price + '&images=' + images,
        success: function (resp) {
            
        },
        error: function () {
            
        }
    });
});