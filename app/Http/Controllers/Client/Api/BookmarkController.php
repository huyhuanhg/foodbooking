<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiBookmarkRequest;
use App\Models\Store;
use App\Services\BookmarkService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BookmarkController extends Controller
{

    protected $bookmarkService;

    public function __construct(BookmarkService $bookmarkService)
    {
        $this->bookmarkService = $bookmarkService;
    }

    public function index(Request $request)
    {
        $response = $this->bookmarkService->getBookmarks($request->only('page', 'store_ids'));
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function show(Store $bookmark)
    {
        $response = $this->bookmarkService->getBookmarkById($bookmark);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function store(ApiBookmarkRequest $request)
    {
        $response = $this->bookmarkService->create($request);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function update(ApiBookmarkRequest $request)
    {
        $response = $this->bookmarkService->update($request);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function destroy(Store $bookmark)
    {
        $response = $this->bookmarkService->delete($bookmark);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }
}
