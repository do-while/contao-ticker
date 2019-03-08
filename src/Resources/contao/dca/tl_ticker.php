<?php

/**
 * @copyright  Softleister 2008-2019
 * @author     Softleister <info@softleister.de>
 * @package    contao-ticker
 * @license    MIT
 * @see	       https://github.com/do-while/contao-ticker
 *
 */

/**
 * Table tl_ticker 
 */
$GLOBALS['TL_DCA']['tl_ticker'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'ptable'                      => 'tl_ticker_category',
        'enableVersioning'            => true,
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary',
                'pid' => 'index'
            )
        )
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 4,
            'filter'                  => true,
            'fields'                  => array('sorting'),
            'panelLayout'             => 'filter;search,limit',
            'headerFields'            => array('title', 'typ', 'tstamp'),
            'child_record_callback'   => array('tl_ticker', 'listTexte'),
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'                => 'act=select',
                'class'               => 'header_edit_all',
                'attributes'          => 'onclick="Backend.getScrollOffset();"'
            )
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_ticker']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.gif'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_ticker']['copy'],
                'href'                => 'act=paste&mode=copy',
                'icon'                => 'copy.gif'
            ),
            'cut' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_ticker']['cut'],
                'href'                => 'act=paste&mode=cut',
                'icon'                => 'cut.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_ticker']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
            ),
            'toggle' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_ticker']['toggle'],
                'icon'                => 'visible.gif',
                'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
                'button_callback'     => array('tl_ticker', 'toggleIcon')
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_ticker']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        'default'                     => '{ticker_legend},tickertext,color;'
                                        .'{link_legend:hide},url,target,linktitle;'
                                        .'{publish_legend},published,start,stop'
    ),

    // Fields
    'fields' => array
    (
        'id' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL auto_increment"
        ),
        'pid' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'sorting' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'tstamp' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'tickertext' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_ticker']['tickertext'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'tl_class'=>'long'),
            'sql'                     => "text NULL"
        ),
        'color' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_ticker']['color'],
            'default'                 => 'msg-white',
            'exclude'                 => true,
            'inputType'               => 'select',
			'options'                 => array
			                             (
			                                'msg-white'      => 'White',
                                            'msg-black'      => 'Black',
                                            'msg-red'        => 'Red',
                                            'msg-pink'       => 'Pink',
                                            'msg-purple'     => 'Purple',
                                            'msg-deeppurple' => 'Deep Purple',
                                            'msg-indigo'     => 'Indigo',
                                            'msg-blue'       => 'Blue',
                                            'msg-lightblue'  => 'Light Blue',
                                            'msg-cyan'       => 'Cyan',
                                            'msg-teal'       => 'Teal',
                                            'msg-green'      => 'Green',
                                            'msg-lightgreen' => 'Light Green',
                                            'msg-lime'       => 'Lime',
                                            'msg-yellow'     => 'Yellow',
                                            'msg-amber'      => 'Amber',
                                            'msg-orange'     => 'Orange',
                                            'msg-deeporange' => 'Deep Orange',
                                            'msg-brown'      => 'Brown',
                                            'msg-grey'       => 'Grey',
                                            'msg-bluegrey'   => 'Blue Grey'
			                             ),
			'eval'                    => array('chosen'=>true, 'tl_class'=>'w50'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_ticker_category'],
			'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'url' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['MSC']['url'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
            'wizard'                  => array( array('tl_ticker', 'pagePicker') ),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'target' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['MSC']['target'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'linktitle' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_ticker']['linktitle'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'published' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_ticker']['published'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('doNotCopy'=>true),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'start' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_ticker']['start'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
            'sql'                     => "varchar(10) NOT NULL default ''"
        ),
        'stop' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_ticker']['stop'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
            'sql'                     => "varchar(10) NOT NULL default ''"
        )
    )
);

/**
 * Class tl_ticker
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Softleister 2008-2014
 * @author     Softleister <info@softleister.de>
 * @package    Ticker
 */
class tl_ticker extends Backend
{
  //-----------------------------------------------------------------
  //  Konstruktor
  //-----------------------------------------------------------------
  public function __construct()
  {
    parent::__construct();
    $this->import('BackendUser', 'User');
  }

  //-----------------------------------------------------------------
  //  Callback zum Anzeigen der Tickereinträge im Backend
  //
  //  $arrRow - aktueller Datensatz
  //-----------------------------------------------------------------
  public function listTexte($arrRow)
  {
    $key = $arrRow['published'] ? 'published' : 'unpublished';
    $date = date($GLOBALS['TL_CONFIG']['datimFormat'], $arrRow['tstamp']);

    return '
<div class="cte_type ' . $key . '">' . $date . '</div>
<div class="limit_height block">'.$arrRow['tickertext'].'</div>' . "\n";
  }

  //-----------------------------------------------------------------
  // Return the link picker wizard
  // @param object
  // @return string
  //-----------------------------------------------------------------
  public function pagePicker(DataContainer $dc)
  {
      return ' <a href="contao/page.php?do=' . Input::get('do') . '&amp;table=' . $dc->table . '&amp;field=' . $dc->field . '&amp;value=' . str_replace(array('{{link_url::', '}}'), '', $dc->value) . '" title="' . specialchars($GLOBALS['TL_LANG']['MSC']['pagepicker']) . '" onclick="Backend.getScrollOffset();Backend.openModalSelector({\'width\':765,\'title\':\'' . specialchars(str_replace("'", "\\'", $GLOBALS['TL_LANG']['MOD']['page'][0])) . '\',\'url\':this.href,\'id\':\'' . $dc->field . '\',\'tag\':\'ctrl_'. $dc->field . ((Input::get('act') == 'editAll') ? '_' . $dc->id : '') . '\',\'self\':this});return false">' . Image::getHtml('pickpage.gif', $GLOBALS['TL_LANG']['MSC']['pagepicker'], 'style="vertical-align:top;cursor:pointer"') . '</a>';
  }

  //-----------------------------------------------------------------
  //    Veröffentlichung umschalten
  //-----------------------------------------------------------------
    public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
    {
        if( strlen(Input::get('tid')) ) {
            $this->toggleVisibility( Input::get('tid'), (Input::get('state') == 1) );
            $this->redirect( $this->getReferer() );
        }

        // Check permissions AFTER checking the tid, so hacking attempts are logged
        if( !$this->User->isAdmin && !$this->User->hasAccess('tl_ticker::published', 'alexf') ) {
            return '';
        }

        $href .= '&amp;tid='.$row['id'].'&amp;state='.($row['published'] ? '' : 1);

        if( !$row['published'] ) {
            $icon = 'invisible.gif';
        }
        return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.Image::getHtml($icon, $label).'</a> ';
    }

  //-----------------------------------------------------------------
  //    Veröffentlichung umschalten
  //-----------------------------------------------------------------
    public function toggleVisibility($intId, $blnVisible)
    {
        // Check permissions to publish
        if( !$this->User->isAdmin && !$this->User->hasAccess('tl_ticker::published', 'alexf') ) {
            $this->log('Not enough permissions to publish/unpublish Ticker ID "'.$intId.'"', __METHOD__, TL_ERROR);
            $this->redirect('contao/main.php?act=error');
        }

        $objVersions = new Versions('tl_ticker', $intId);
        $objVersions->initialize();

        // Trigger the save_callback
        if( is_array($GLOBALS['TL_DCA']['tl_ticker']['fields']['published']['save_callback']) ) {
            foreach( $GLOBALS['TL_DCA']['tl_ticker']['fields']['published']['save_callback'] as $callback ) {
                if( is_array($callback) ) {
                    $this->import($callback[0]);
                    $blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
                }
                else if( is_callable($callback) ) {
                    $blnVisible = $callback($blnVisible, $this);
                }
            }
        }

        // Update the database
        $this->Database->prepare("UPDATE tl_ticker SET tstamp=". time() .", published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")->execute($intId);

        $objVersions->create();
        $this->log('A new version of record "tl_ticker.id='.$intId.'" has been created'.$this->getParentEntries('tl_ticker', $intId), __METHOD__, TL_GENERAL);
    }

  //-----------------------------------------------------------------
}
