<div style="font-family: Arial, sans-serif;">
    <h2>Your Daily Quote</h2>
    <blockquote>
        "{{ $quote->quote }}"
    </blockquote>
    <p>- {{ $quote->author ?? 'Unknown' }}</p>
</div>
