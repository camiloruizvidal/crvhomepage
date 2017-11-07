<?php

class v
{
    public static function getNotices()
	{
		$cant=5;//$params->get('cant');
		$ds=DIRECTORY_SEPARATOR;
		$html= '';
		$con = new JConfig();
		@$db = &JFactory::getDBO();
		$sql = "SELECT 
			  concat(`#__categories`.`id`, '-', `#__categories`.`alias`) AS `url_cat`,
			  concat(`#__content`.`id`, '-', `#__content`.`alias`) AS `url_art`,
			  concat(`#__categories`.`alias`, '/', `#__content`.`id`,'-',`#__content`.`alias`) AS `url`,
			  `#__content`.`id`,
			  `#__content`.`title`,
			  `#__content`.`alias`,
			  `#__content`.`introtext` AS `introtext`,
			  `#__content`.`images`
			FROM
		  `#__content`
		  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)
		  WHERE
		  `#__content`.`catid` = 9
		  AND
		  `#__content`.`state` = 1
		ORDER BY
		`#__content`.`created` DESC
		LIMIT {$cant}";
		$db->setQuery($sql);
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();
		$html.='<div id="div_servicios" class="row">';
		foreach($data as $key=>$temp)
		{
			@$url=json_decode($temp->images)->image_intro;
			if(trim($url)==='')
			{
				$url="templates{$ds}crvtemplate{$ds}img{$ds}Logo.jpg";
			}
			$temp->introtext=substr(html_entity_decode(strip_tags($temp->introtext)),0,1000);
			$texto=$temp->introtext;
			$html.='    
            <div class="col-md-4">
                <div class="hover01 column"><figure><a href="' . $temp->url . '" class="img_fb"><img class="img-responsive img_servicios" src="'.$url.'" alt="' . $temp->title . '"></a></figure></div>
                <div class="caption">
                    <a href="' . $temp->url . '"><h3>' . $temp->title . '</h3></a>
                    <p>' . $texto . '...</p>
                    <p>
                        <a href="' . $temp->url . '" class="more">Ver mas..</a> 
                    </p>
                </div>
            </div>';
		}
		$html.='</div>';
		return $html;
	}

}