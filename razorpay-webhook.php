<?php
// Simple webhook listener to simulate deactivation
$input = @file_get_contents("php://input");
file_put_contents("webhook-log.txt", date("c") . " - " . $input . "\n", FILE_APPEND);

// Simulate user deactivation logic
$data = json_decode($input, true);
if (isset($data['event']) && $data['event'] === 'subscription.charged') {
  // Success: Update user meta or send email
} elseif (isset($data['event']) && $data['event'] === 'subscription.cancelled') {
  // Failure: Auto-expire account or change role
}
http_response_code(200);
?>
