<?php

namespace QuickLaravel\Response;

use JetBrains\PhpStorm\Pure;

/**
 * 响应助手类
 */
class Response
{

    /**
     * 状态码
     * @var int
     */
    private int $code;

    /**
     * 响应消息
     * @var string
     */
    private string $msg;

    /**
     * 返回数据实体
     * @var array
     */
    private array $data;

    /**
     * 响应信息[消息和状态码]
     * @param string $msg
     * @param int $code
     * @return self
     */
    #[Pure]
    public static function info(string $msg, int $code): self
    {
        return new self($msg, $code);
    }

    /**
     * 构造基础的响应信息
     * @param string $msg
     * @param int $code
     */
    public function __construct(string $msg, int $code)
    {
        $this->code = $code;
        $this->msg = $msg;
        $this->data = [];
    }

}