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
     * @param string $content   错误内容
     * @param int    $line      错误行数
     * @param string $file_path 文件路径
     * @return array
     */
    public static function create(string $content, int $line, string $file_path): array
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
                    'desc' => '错误信息：'.$content
                ),
                'horizontal_content_list' => array(
                    array(
                        'keyname' => '错误行数：',
                        'value' => $line
                    ),
                    array(
                        'keyname' => '文件路径：',
                        'value' => $file_path
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