<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionsModel;

class ApiController extends Controller
{
    public function callback(Request $request)
    {
        $transactionStatusInfo = $request->post('transaction');
        $transactionStatus = $transactionStatusInfo['status'];
        $transactionId = $transactionStatusInfo['id'];

        TransactionsModel::updateStatus($transactionId, $transactionStatus);

        if ($transactionStatus === "false") {
            $error = $request->post('error');
            $transactions = $request->post('transactions');

            $url = "sorry?message=" . $error['recommended_message_for_user'] . '&' . http_build_query($transactions[$transactionId]);
        } else {
            $url = "thank-you";
        }

        return $url;

    }
}
