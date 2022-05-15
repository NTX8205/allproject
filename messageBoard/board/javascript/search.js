$(document).ready(function () {

            load_data();

            function load_data(query) {
                $.ajax({
                    url: "search.php",
                    method: "GET",
                    data: {
                        s: query
                    },
                    success: function (data) {
                        $('#search_result').html(data);
                    }
                });
            }
            $('#search_text').keyup(function () {
                var search = $(this).val();
                if (search != '') {
                    load_data(search);
                } else {
                    load_data();
                }
            });
        });