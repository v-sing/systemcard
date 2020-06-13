<?php

namespace App\Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Service\FileService;
use App\Modules\Service\TpService;
use Illuminate\Http\Request;
use Exception;

class ApiController extends Controller
{
    /**
     * 获取商圈信息接口
     * @param TpService $tpService
     * @return \Illuminate\Http\JsonResponse
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @author 牛永光 nyg1991@aliyun.com
     * @date 2020/5/29 17:33
     */
    public function getBusinessInfo(TpService $tpService)
    {
        $result = $tpService->getBusinessInfo();
        return $this->success('', $result);
    }

    /**
     * 商户、分类信息接口
     * @param TpService $tpService
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @author 牛永光 nyg1991@aliyun.com
     * @date 2020/5/29 18:10
     */
    public function getInfoById(TpService $tpService, Request $request)
    {
        $result = $tpService->getInfoByIds($request->get('id'), $request->get('type'));
        return $this->success('', $result);
    }

    /**
     * 获取商品信息接口
     * @param TpService $tpService
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @author 牛永光 nyg1991@aliyun.com
     * @date 2020/5/29 18:10
     */
    public function getGoodsInfo(TpService $tpService, Request $request)
    {
        $result = $tpService->getGoodsInfo($request->get('id'), $request->get('type'));
        return $this->success('', $result);
    }

    /**
     * 通用上传
     * @param FileService $fileService
     * @param Request $request
     * @return bool|int|mixed
     * @author 牛永光 nyg1991@aliyun.com
     * @date 2020/5/9 17:55
     */
    public function upload(FileService $fileService, Request $request)
    {
        $model = $fileService->upload($request);
        if ($model) {
            return $this->success('上传成功', $model);
        } else {
            return $this->error();
        }
    }
}