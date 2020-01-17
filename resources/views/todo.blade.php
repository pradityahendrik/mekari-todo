<!DOCTYPE html>
<html>
    <head>
        <title>Mekari - Todo</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Mekari - Todo</div>
                <form id="form-todo">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="input-group input-group-lg">
                                <input name="name" id="input-todo" placeholder="Type your todo here" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-lg btn-primary">Add Todo</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span id="typing-todo"></span>
                        </div>
                    </div>
                </form>
                <br/>
                <ul class="list-group list-group-flush" id="list-todo">
                    <button class="btn btn-danger" id="delete-todo" hidden>
                        Delete Selected
                    </button>
                </ul>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(() => {
                let array = [];
                $('#form-todo').submit((e) => {
                    e.preventDefault();
                    $(this).find('button').attr('disabled', true);
                    $.ajax({
                        url: 'http://localhost/mekari-todo/public/api/todo',
                        type: 'post',
                        data: {
                            name: $('input[name="name"]').val()
                        },
                        success: function(res){
                            $('#input-todo').val('');
                            $('#typing-todo').text('');
                            $.ajax({
                                url: 'http://localhost/mekari-todo/public/api/todo',
                                type: 'get',
                                cache: false,
                                success: function(res){
                                    $('#list-todo').prepend(
                                        '<li class="list-group-item">'+
                                            '<div class="form-check">'+
                                                '<input class="form-check-input" type="checkbox" id="'+res.id+'">'+
                                                '<label class="form-check-label" for="'+res.id+'">'+res.name+' [X]</label>'+
                                            '</div>'+
                                        '</li>'
                                    );

                                    if (res) {
                                        $('#delete-todo').removeAttr('hidden');
                                    }

                                    $('[type="checkbox"]').click(function(){                                        
                                        array.push($(this).attr('id'));
                                        $(this).attr("checked", "checked");
                                    });
                                },
                                error: function(err){
                                    console.log(err);
                                }
                            })
                        },
                        error: function(err){
                            console.log(err);
                        }
                    })
                });

                $('#input-todo').keyup(() => {
                    $('#typing-todo').text($('#input-todo').val());
                });

                $('#delete-todo').click(function(e){
                    e.preventDefault();
                    $.ajax({
                        url: 'http://localhost/mekari-todo/public/api/todo/delete',
                        type: 'post',
                        data: {
                            ids: array
                        },
                        success: function(res){
                            $('.list-group-item:has(input[type="checkbox"]:checked)').remove();
                        },
                        error: function(err){
                            console.log(err);
                        }
                    });
                });
            });
        </script>
    </body>
</html>
