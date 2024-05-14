 <?php include('process.php') ?>
	<!--Container-->
	<div class="w-full md:w-4/5 xl:w-3/5" style="padding: 0 40px 0 40px">
		<div class="flex justify-between items-center py-2">
			<h5>Announcements List</h5>
			<a href="#addAnnouncement" data-toggle="modal">
				<button type="button" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
					Add
				</button>
			</a>
		</div>
			<div id='recipients' class="mt-6 xl:mt-0 bg-white">
			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">Title</th>
						<th data-priority="1">Date Added</th>
						<th data-priority="1">Action</th>
					</tr>
				</thead>
				<tbody class="text-center">
				<?php while ($row = mysqli_fetch_array($results)) { ?>
					<tr>
						<td class="uppercase"><?php echo $row['title']; ?></td>
						<td>
 							<?php echo $row['dateAdded']; ?>
					    </td>
						<td>
							<a href="#edit<?php echo $row['id'];?>" data-toggle="modal">
                         	   <i class="far fa-edit text-gray-400 cursor-pointer hover:text-blue-300 transition-all" style="font-size: 13px"></i>
                       		 </a>
							<a href="#view<?php echo $row['id'];?>" data-toggle="modal">
                         	  <button type="button" class="ml-2 inline-block px-2 py-1 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
								What for?
							  </button>
                       		 </a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

	<?php include './modals/addModal.php'; ?> 
	<?php include './modals/editModal.php'; ?> 
	<?php include './modals/viewModal.php'; ?> 