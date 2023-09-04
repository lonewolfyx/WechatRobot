<?php
/**
 * 文本类型
 *
 * @author 骚气靓丽的仔仔 < 我就丶是逗比 >
 * @mail   olddrivero.king@qq.com
 */

declare( strict_types=1 );

namespace WechatRobot\template;

class Text
{
    /**
     * 文本类型模板
     *
     * @param string $content   错误内容
     * @param int    $line      错误行数
     * @param string $file_path 文件路径
     * @return array
     */
    public static function create(string $content, int $line, string $file_path): array
    {
        return array(
            'msgtype' => 'text',
            'text' => array(
                'content' => sprintf("错误信息：\n%s\n\n错误文件：%s\n\n错误行数：%s\n", $content, $file_path, $line),
                'mentioned_list' => array(
                    '@all'
                )
            )
        );
    }
}