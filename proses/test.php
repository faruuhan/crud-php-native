for($i=1; $i<=31; $i++)

			

		

			

			{

			$selected = $i == $vtanggal ? "selected":"";



			echo "<option value ='".sprintf("%02d",$i)."' $selected >".$i."</option>";

			

			}

			

			?>

			</select>

		

			<select name="bulan">

		

			<?php

			

			$bulan = array("", "Jan", "Feb", "Mart", "Apl", "Mei", "Jun", "Jul", "Agust", "Sept", "Oct", "Nov", "Des");

			for($i=1; $i<=12; $i++)

				

			{

			$selected = $i == $vbulan ? "selected":"";

			echo "<option value='".sprintf("%02d",$i)."' $selected >$bulan[$i]</option>";

			

			}

			

			?>

			

			</select>

		

			<select name="tahun">

		

			<?php

			

			for($i=1986; $i<=2018; $i++)

				

			{

			$selected = $i == $vtahun ? "selected":"";

			

			echo "<option value = '".$i."' $selected>".$i."</option>";

			

			}

			

			?>

			</select>