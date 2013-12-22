<?php

header('content-type: application/json; charset=utf-8');

$doorsString = "softmaple_MR_BIGBEAD_U_MITERED_3,cherry_FK_F_CC_ARCHEDWAINSCOTING_24,Ash_FK_C_W_PROVINCIAL_24,mahogany_FK_L_W_SQUARE_24,hardmaple_FO_J_Y_PROVINCIAL_24,mdf_MDFBEAD_MDFF_MDFRP_SQUAREWAINSCOTING_VARIED,pacificcoastmaple_STEP_F_SL_MITERED_24,sawnredoak_1_1_U_MITERED_24,softmaple_MR_B_UARD_RAISEDPANELDRF_2,cherry_CC_CC_CC_RAISEDPANELDRF_2,redoak_FO_A_X_ARCH_24,braziliancherry_AR_2_V_MITERED_3,whiteoak_FM_A_V_SQUARE_24,europeanbeech_FS_I_U_SQUARE_24,poplar_MR_1_V_MITERED_3,lyptus_DP_K_UAR_MITERED_24,cherry_CC_CC_CC_MITERED_3,mdf_MDFBEAD_MDFA_MDFRP_SQUARE_24,hickory_FS_F_Y_HALFCONTINUOUS_24,birchmdf_FM_1_U_MITERED_24,hardmaple_CC_CC_CC_MITERED_3,birch_FO_MM_U_SQUARE_24,rustichickory_FO_B_X_SQUARE_24,poplar_FO_A_X_RAISEDPANELDRF_24,knottyalder_FS_F_SLV_SQUARE_24,softmaple_FM_B_U_SQUARE_24,poplar_FS_I_Y_SQUARE_24,Alder_MRROPE_B_CC_MITERED_3,Alder_FS_I_U_SQUARE_24,Alder_FM_J_W_RAISEDPANELDRF_24,riftcutredoak_2_1_SL_MITERED_24,walnut_0_0_0_DRAWER_NONE,hardmaple_FO_F_W_ANGLEDWAINSCOTING_24,sapele_DP_J_UAR_MITERED_24,hickory_FK_M_V_KEYHOLE_24,knottypine_FM_L_W_SQUARE_24,birch_FK_B_U_HALFARCH_24,walnut_FK_G_V_ARCH_24,sawnwhiteoak_FO_MM_X_CONTINUOUS_24,europeanbeech_MR_B_CC_MITERED_3,redoak_0_H_0_DRAWER_NONE,softmaple_CCROPE_CC_UP203_MITERED_3,softmaple_FO_F_X_SQUAREWAINSCOTING_VARIED,hickory_0_A_0_DRAWER_NONE,cherry_AM_MM_LD_SQUARE_3,cherry_FK_MM_U_SQUARE_24,Birch_BIGBEAD_BIGBEAD_SL_MITERED_24,clearpine_FM_I_W_CONTINUOUS_24,hickory_FS_F_SLB_SQUARE_24";
$doorsArray = explode(',', $doorsString);

if (isset($_GET["doorDir"])) {
	$doorDir = strip_tags($_GET['doorDir']);
}

$foundDoor = 'false';
if ($doorDir != null){
	foreach ($doorsArray as $value) {
		if (strstr(strtolower($value), strtolower($doorDir))) {
			$foundDoor = $value;
		}
	}
}
echo json_encode($foundDoor);

?>