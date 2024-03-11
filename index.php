<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Info form</title>
</head>
<body>
	<h1>Fill in your information</h1>
	<form action="info.php" method="post">
		<label>First Name</label>
		<input type="text" placeholder="John" name="fname">
		<br>
		<br>
		<label>Last Name</label>
		<input type="text" placeholder="Doe" name="lname">
		<br>
		<br>
		<label>Gender</label>
		<select name="gender">
			<option>Male</option>
			<option>Female</option>
		</select>
		<br>
		<br>
		<label>County</label>
		<select name="county">
			<option>1. Mombasa County</option>
			<option>2. Kwale County</option>
			<option>3. Kilifi County</option>
			<option>4. Tana River County</option>
			<option>5. Lamu County</option>
			<option>6. Taita Taveta County</option>
			<option>7. Garissa County</option>
			<option>8. Wajir County</option>
			<option>9. Mandera County</option>
			<option>10. Marsabit County</option>
			<option>11. Isiolo County</option>
			<option>12. Meru County</option>
			<option>13. Tharaka Nithi County</option>
			<option>14. Embu County</option>
			<option>15. Kitui County</option>
			<option>16. Machakos County</option>
			<option>17. Makueni County</option>
			<option>18. Nyandarua County</option>
			<option>19. Nyeri County</option>
			<option>20. Kirinyaga County</option>
			<option>21. Murang’a County</option>
			<option>22. Kiambu County</option>
			<option>23. Turkana County</option>
			<option>24. West Pokot County</option>
			<option>25. Samburu County</option>
			<option>26. Trans Nzoia County</option>
			<option>27. Uasin Gishu County</option>
			<option>28. Elgeyo/Marakwet County</option>
			<option>29. Nandi County</option>
			<option>30. Baringo County</option>
			<option>31. Laikipia County</option>
			<option>32. Nakuru County</option>
			<option>33. Narok County</option>
			<option>34. Kajiado County</option>
			<option>35. Kericho County</option>
			<option>36. Bomet County</option>
			<option>37. Kakamega County</option>
			<option>38. Vihiga County</option>
			<option>39. Bungoma County</option>
			<option>40. Busia County</option>
			<option>41. Siaya County</option>
			<option>42. Kisumu County</option>
			<option>43. Homa Bay County</option>
			<option>44. Migori County</option>
			<option>45. Kisii County</option>
			<option>46. Nyamira County</option>
			<option>47. Nairobi County</option>
		</select>
		<br>
		<br>
		<label>Hobbies</label>
		<input type="text" placeholder="Swimming,football" name="hobbies">
		<br>
		<br>
		<label>Brief description</label>
		<br>
		<textarea maxlength="500" placeholder="Write a brief decription about yourself" name="desc"></textarea>
		<br>
		<br>
		<button type="submit">Submit</button>
		
	</form>
</body>
</html>