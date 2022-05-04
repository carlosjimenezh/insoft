function verifica()
        {
            if(document.contacto.nombre.value.trim()==""  || document.contacto.email.value.trim()=="" || document.contacto.producto.value.trim()=="")
            {
                alert("Es necesario escribir tu nombre, e-mail y el diseño de producto");     
            }
            else
            {
                var s = document.contacto.email.value;
                var filter=/^[A-Za-z][A-Za-z0-9_.ñÑ-]*@[A-Za-z0-9_ñÑ-]+\.[A-Za-z0-9_.ñÑ-]+[A-za-z]$/;
                if(filter.test(s))
                {            
                    document.contacto.submit();
                }
                else
                {
                    alert("Por favor, escribe una dirección de e-mail válida");
                }
            }
        }