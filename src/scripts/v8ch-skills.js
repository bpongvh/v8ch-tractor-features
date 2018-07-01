import SkillsList from './components/SkillsList';

const { registerBlockType } = wp.blocks;
const { __ } = wp.i18n;

const editFn = () => {
    return (
        [
            <SkillsList key="editor" />,
        ]
    );
};

const saveFn = () => {
    return (<SkillsList />);
};

/**
 * Register the block
 *
 * @link https://wordpress.org/gutenberg/handbook/block-api/
 * @param  {string} name
 * @param  {Object} settings
 * @return {?WPBlock}
 */
registerBlockType('v8ch/v8ch-skills', {
    category: 'common',
    icon: 'category',
    keywords: [__('skills'), __('V8CH')],
    title: __('V8CH Skills'),

    edit: editFn,

    save: saveFn,
});
