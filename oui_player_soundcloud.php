<?php

/*
 * This file is part of oui_player_soundcloud,
 * a oui_player v2+ extension to easily embed
 * Soundcloud customizable audio players in Textpattern CMS.
 *
 * https://github.com/NicolasGraph/oui_player_soundcloud
 *
 * Copyright (C) 2018 Nicolas Morand
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA..
 */

/**
 * Soundcloud
 *
 * @package Oui\Player
 */

namespace Oui\Player {

    if (class_exists('Oui\Player\Provider')) {

        class Soundcloud extends Provider
        {
            protected static $patterns = array(
                'audio' => array(
                    'scheme' => '#((http|https)://(api\.)?soundcloud\.com/[\S]+)#i',
                    'id'     => '1',
                ),
            );
            protected static $src = '//w.soundcloud.com/';
            protected static $glue = array('player/?url=', '?', '&amp;');
            protected static $dims = array(
                'width'          => array(
                    'default' => '100%',
                ),
                'height'         => array(
                    'default' => '166',
                ),
                'ratio'          => array(
                    'default' => '',
                ),
            );
            protected static $params = array(
                'auto_play'      => array(
                    'default' => 'false',
                    'valid'   => array('true', 'false'),
                ),
                'buying'         => array(
                    'default' => 'true',
                    'valid'   => array('true', 'false'),
                ),
                'color'          => array(
                    'default' => '#ff8800',
                    'valid'   => 'color',
                ),
                'download'       => array(
                    'default' => 'true',
                    'valid'   => array('true', 'false'),
                ),
                'hide_related'   => array(
                    'default' => 'false',
                    'valid'   => array('true', 'false'),
                ),
                'sharing'        => array(
                    'default' => 'true',
                    'valid'   => array('true', 'false'),
                ),
                'show_artwork'   => array(
                    'default' => 'true',
                    'valid'   => array('true', 'false'),
                ),
                'show_comments'  => array(
                    'default' => 'true',
                    'valid'   => array('true', 'false'),
                ),
                'show_playcount' => array(
                    'default' => 'true',
                    'valid'   => array('true', 'false'),
                ),
                'show_reposts'   => array(
                    'default' => 'true',
                    'valid'   => array('true', 'false'),
                ),
                'show_user'      => array(
                    'default' => 'true',
                    'valid'   => array('true', 'false'),
                ),
                'single_active'  => array(
                    'default' => 'true',
                    'valid'   => array('true', 'false'),
                ),
                'start_track'    => array(
                    'default' => '0',
                    'valid'   => 'number',
                ),
                'theme_color'    => array(
                    'default' => '#ff3300',
                    'valid'   => 'color',
                ),
                'visual'         => array(
                    'default' => 'false',
                    'valid'   => array('true', 'false'),
                ),
            );
        }
    }
}

namespace {
    function oui_soundcloud($atts) {
        return oui_player(array_merge(array('provider' => 'soundcloud'), $atts));
    }

    function oui_if_soundcloud($atts, $thing) {
        return oui_if_player(array_merge(array('provider' => 'soundcloud'), $atts), $thing);
    }
}
