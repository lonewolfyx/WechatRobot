<?php
/**
 * 文本卡片
 *
 * @author 骚气靓丽的仔仔 < 我就丶是逗比 >
 * @mail   olddrivero.king@qq.com
 */

declare( strict_types=1 );

namespace WechatRobot\template;

class TextCard
{
    /**
     * 文本卡片
     *
     * @param string $content 错误内容
     * @param int    $code    错误行数
     * @return array
     */
    public static function create(string $content, int $code): array
    {
        return array(
            'msgtype' => 'template_card',
            'template_card' => array(
                'card_type' => 'text_notice',
                'source' => array(
                    'icon_url' => 'https://dabaodan-tos.tos-cn-beijing.volces.com/public/danger.png',
                    'desc' => '异常通知'
                ),
                'main_title' => array(
                    'title' => '代码错误',
                    'desc' => '您所编写的代码出现了错误，请尽快修复
错误信息：'
                ),
                'quote_area' => array(
                    'type' => 0,
                    'title' => '',
                    'quote_text' => $content
                ),
                'horizontal_content_list' => array(
                    array(
                        'keyname' => '错误行数：',
                        'value' => $code
                    )
                ),
                'card_action' => array(
                    'type' => 1,
                    'url' => 'https://wtool.com.cn/'
                )
            )
        );
    }

}