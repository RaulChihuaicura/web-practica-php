let d       = new Date();
        //let dias    = ["Domingo", "lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"]
        //let meses   = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]
        
        //document.body.innerHTML = d;
        //document.getElementById("fecha1").innerHTML = "<h1> El día es : " + dias[d.getDay()] + "</h1>";
        //document.getElementById("fecha2").innerHTML = "<h1> El mes es : " + meses[d.getMonth()] + "</h1>";
        //document.getElementById("fecha3").innerHTML = "<h1> El año es : " + d.getFullYear() + "</h1>";

        //document.getElementById("fecha4").innerHTML = "<h1> La hora es : " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds() + "</h1>";

        //function getHora(){
        //    const h = new Date();

            //const hora      = ((h.getHours() < 10)? "0" : "") + h.getHours();
        //    const minutos   = ((h.getMinutes() < 10)? "0" : "") + h.getMinutes();
        //    const segundos  = ((h.getSeconds() < 10)? "0" : "") + h.getSeconds();

        //    console.log("Hora actual : " + hora + ":" + minutos + ":" + segundos);
        //}

        //getHora();

        function generaHora(){
            let hora_actual         = new Date();
            let hora                = hora_actual.getHours().toString().length < 2 ? "0" + hora_actual.getHours() : hora_actual.getHours();
            let minutos             = hora_actual.getMinutes().toString().length < 2 ? "0" + hora_actual.getMinutes() : hora_actual.getMinutes();
            let segundos            = hora_actual.getSeconds().toString().length < 2 ? "0" + hora_actual.getSeconds() : hora_actual.getSeconds();
            let hora1             = `${hora}:${minutos}:${segundos}`;
            document.getElementById("hours").innerHTML   = hora1;
        }
        setInterval(() => {
            generaHora();
        }, 1000)