function bindAutoResizeTextareas() {
    requestAnimationFrame(() => {
        $('.auto-resize-textarea').each(function () {
            const $this = $(this);
            if ($this.data('resize-initialized')) return;
            $this.data('resize-initialized', true);
            $this.on('input.auto-resize propertychange.auto-resize', function () {
                $this.css('height', '36px');
                $this.css('height', this.scrollHeight + 'px');
            });

            setTimeout(function () {
                $this.trigger('input');
            },100);
        });
    });
}

Dcat.ready(function () {
    bindAutoResizeTextareas();
});

$(document).on('pjax:end', function () {
    bindAutoResizeTextareas();
});
