function verifica(idContacto)
        {
            if(document.getElementById(idContacto).nombre.value.trim()==""  
            || document.getElementById(idContacto).email.value.trim()=="" 
            || document.getElementById(idContacto).producto.value.trim()=="")
            {
                alert("Es necesario escribir tu nombre, e-mail y el diseño de producto");     
            }
            else
            {
                var s = document.getElementById(idContacto).email.value;
                var filter=/^[A-Za-z][A-Za-z0-9_.ñÑ-]*@[A-Za-z0-9_ñÑ-]+\.[A-Za-z0-9_.ñÑ-]+[A-za-z]$/;
                if(filter.test(s))
                {            
                    document.getElementById(idContacto).submit();
                }
                else
                {
                    alert("Por favor, escribe una dirección de e-mail válida");
                }
            }
        }