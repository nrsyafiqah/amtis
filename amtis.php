<!DOCTYPE html>
<html>
<body style="text-align:center">

<h3>Calculate Electricity</h3>

Enter Voltage: <input type="number" id="voltage"></input><br>
<br>
Enter Current: <input type="number" id="current"></input><br>
<br>
Enter Current Rate: <input type="number" id="crate"></input><br>
<br>
<button onclick="toCalculate()">Calculate</button>

<script language= "JavaScript">
function toCalculate() {
    var voltage = document.getElementById("voltage").value;
	var current = document.getElementById("current").value;
    var crate = document.getElementById("crate").value;
	//var hour = document.getElementById("i").value;

	var i;
    var power;
    var energy;
    var total;
    var hour

    
    document.write(" <table border=2px solid black>")
    document.write(" <th>Hour</th>")
    document.write(" <th>Energy(kWh)</th>")	
    document.write(" <th>Total (RM)</th>")				                
	for (i=0; i < 24; i++){
		hour = i + 1;
		power = voltage * current;
        energy = power * hour / 1000;
        total = energy * (crate/100);

        let e = energy.toFixed(5);
        let t = total.toFixed(2);
		
        document.write(" <tr> ")
                        document.write(" <td style= padding:10px >" + hour + " </td> ")
                        document.write(" <td style= padding:10px >" + e + " </td> ")
                        document.write(" <td style= padding:10px >" + t + " </td> ")
                    
                    document.write(" </tr> ")
                }
                document.write(" </table> ")
    
}
</script>
</body>
</html>
