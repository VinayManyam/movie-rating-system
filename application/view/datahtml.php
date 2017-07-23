<?php
echo "hellow";


$str=array('p0','p1','p2','p3','p4','p5');
$res=array_combine($str, $bannerdata);
     
     extract($res);
    
     
     
     
     
     
     

?>

							<!-- load products from table -->
								<?php foreach ($bannerdata as $product ) : ?>
									<tr>
										<td><?=  $product->pid ?></td>
										<td><?=  $product->src  ?></td>
										<td><?=  $product->title  ?></td>
										<td><textarea rows="4" disabled><?=  $product->description  ?></textarea></td>
									
										
												<style>#g {width:50px;height:50px;}</style>

									</tr>
									<?php endforeach; ?>
									
									