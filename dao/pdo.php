<?php

function getData($sql)
{
    $conn = connect_pdo();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}

function getDataWidthParams($sql, $params)
{
    $conn = connect_pdo();
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}

function executeCUD($sql, $params)
{
    $conn = connect_pdo();
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    $count = $stmt->rowCount();
    return $count;
}
function executeCount($sql)
{
    $conn = connect_pdo();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->rowCount();
    return $count;
}

function pdo_execute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connect_pdo();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
// ===================Truy vấn nhiều dữ liệu=======================//
function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connect_pdo();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll($result);
        return $rows;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
// ===================Truy vấn một dữ liệu=======================//

function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connect_pdo();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function pdo_query_value($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connect_pdo();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
// =========================== chuyển đổi number thành tiền tệ=====================
if (!function_exists('currency_format')) {

    function currency_format($number, $suffix = ' vnđ') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "<sup>{$suffix}</sup>";
        }
    }

}