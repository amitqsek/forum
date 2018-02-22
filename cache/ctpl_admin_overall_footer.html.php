<?php if (!defined('IN_PHPBB')) exit; ?></div>
					</div>
				<div class="clear"></div>
			</div>
			</div>
		</div>
	</div>

	<div id="page-footer">
		<div class="container">
			<?php if ($this->_rootref['S_COPYRIGHT_HTML']) {  ?>

				<?php echo (isset($this->_rootref['CREDIT_LINE'])) ? $this->_rootref['CREDIT_LINE'] : ''; ?>

				<?php if ($this->_rootref['TRANSLATION_INFO']) {  ?><br /><?php echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; } } if ($this->_rootref['DEBUG_OUTPUT']) {  if ($this->_rootref['S_COPYRIGHT_HTML']) {  ?><br /><?php } ?>

				<?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; ?>

			<?php } ?>

		</div>
	</div>
</div>

</body>
</html>