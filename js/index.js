function loadCity(select)
        {
            var citySelect = $('select[name="city"]');
            citySelect.attr('disabled', 'disabled'); // делаем список городов не активным

            // послыаем AJAX запрос, который вернёт список городов для выбранной области
            $.getJSON('index.php', {action:'getCity', region:select.value}, function(cityList){

                citySelect.html(''); // очищаем список городов

                // заполняем список городов новыми пришедшими данными
                $.each(cityList, function(i){
                    citySelect.append('<option value="' + i + '">' + this + '</option>');
                });

                citySelect.removeAttr('disabled'); // делаем список городов активным

            });
        }