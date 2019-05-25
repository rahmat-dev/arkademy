<?php

require_once 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arkademy</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container bg-dark mt-4 p-4">
		<form action="addprogrammer.php" method="POST">
			<div class="form-row">
		    <div class="col">
		      <input type="text" class="form-control" placeholder="Programmer Baru" name="username">
		    </div>
		    <div class="col">
			  	<button type="submit" name="addprogrammer" class="btn btn-primary">Tambah</button>
		    </div>
		  </div>
		</form>

		<table border="2" class="text-white mt-2" cellpadding="7" width="100%">
			<tbody>
				<?php
					$query = "SELECT * FROM users";
					$result = mysqli_query($conn, $query);

					if (mysqli_num_rows($result) > 0) :
						while ($user = mysqli_fetch_assoc($result)) :
				?>
				<tr class="mt-2">
					<td><?= $user['name'] ?></td>
					<td rowspan="2">
						<form action="addskill.php" class="ml-2" method="POST">
							<div class="form-row">
						    <div class="col">
						    	<input type="hidden" name="user_id" value="<?= $user['id'] ?>">
						      <input type="text" class="form-control" placeholder="Tambah Skill" name="skillname">
						    </div>
						    <div class="col">
							  	<button type="submit" class="btn btn-primary" name="addskill">Tambah</button>
						    </div>
						  </div>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$querySkill = "SELECT name FROM skills WHERE user_id=" . $user['id'];
						$resultSkill = mysqli_query($conn, $querySkill);
						$skill = "";

						if (mysqli_num_rows($resultSkill) > 0) {
							while ($data = mysqli_fetch_assoc($resultSkill)) {
								$skill .= $data['name'] . ', ';
							}
						}
					?>
					<td><?= $skill ?></td>
				</tr>
				<?php
						endwhile;
					else :
				?>
				<tr>
					<td>Tidak ada data</td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>

	</div>
</body>
</html>