sebelumnya memakai PHP 5.6
saat ini memakai php 7.4

perubahan :
*encrypt    to-> encryption
*encode     to-> encrypt
*decode     to-> decrypt
<!-- ================================================================================================== -->
1.	".config/autoload.php"

	$this->load->library('encrypt');
	
	~ menjadi 
	
	$this->load->library('encryption');

<!-- ================================================================================================== -->
2. ".Controllers/auth.php" (line 67)
	         
    $insert['password'] = $this->encrypt->encode($insert['password']);
    
    ~ menjadi
    
    $insert['password'] = $this->encryption->encrypt($insert['password']);

<!-- ================================================================================================== -->
3. ".Controllers/Admin.php" (line 100)
3. ".Controllers/Member.php" (line 86)

	if ($this->encrypt->decode($user_data->password) == $password) {

	~ menjadi
	
	if ($this->encryption->decrypt($user_data->password) == $password) {

<!-- ================================================================================================== -->
4. ".views/backend/admin_system/petugas.php" (line 35)

    <td><?php echo $this->encrypt->decode($d1->password) ?></td>
    
    ~ Menjadi

    <td><?php echo $this->encryption->decrypt($d1->password) ?></td>

<!-- ================================================================================================== -->
5. ".views/backend/admin_system/peminjam_form.php" (line 38)
5. ".views/backend/admin_system/petugas_form.php" (line 38)

    <input type="password" name="password" class="form-control" value="<?php if ($data != null) echo $this->encrypt->decode($data->password); ?>">
    
    ~ Menjadi

    <input type="password" name="password" class="form-control" value="<?php if ($data != null) echo $this->encryption->decrypt($data->password); ?>">

<!-- ================================================================================================== -->
6.  ".Controllers/Admin_system.php->Admin_system->peminjam_add" (line 48)
    ".Controllers/Admin_system.php->Admin_system->peminjam_update" (line 71)
    ".Controllers/Admin_system.php->Admin_system->petugas_add" (line 129)
    ".Controllers/Admin_system.php->Admin_system->petugas_update" (line 159)

    $insert['password'] = $this->encrypt->encode($insert['password']);

	~ menjadi
	
    $insert['password'] = $this->encryption->encrypt($insert['password']);