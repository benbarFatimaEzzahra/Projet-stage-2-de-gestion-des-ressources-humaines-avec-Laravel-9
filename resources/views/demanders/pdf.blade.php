<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Generate PDF From View</title>
</head>
<body>
<div class="card-body">
								<div class="table-responsive">
									<table id="example3" class="display" style="min-width: 845px">
										<thead>
											<tr>
												<th>Nom</th>
												<th>Prénom</th>
                                                <th>Nom de service</th>
												<th>Type congé</th>
												<th>Début de congé</th>
												<th>Fin de congé</th>
                                                <th>Etat</th>
                                                <th>Action</th>
											</tr>
										</thead>
										<tbody>
									
											<tr>
                                                <td>{{ $nom}}</td>
                                                <td>{{ $prenom}}</td>                                                 
											</tr>
                                           
										</tbody>
									</table>
								</div>
							</div>
                          

</body>
</html>