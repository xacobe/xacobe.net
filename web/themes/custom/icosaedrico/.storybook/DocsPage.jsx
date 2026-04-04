import { Title, Description, Primary, ArgTypes, Stories } from '@storybook/addon-docs/blocks';

export function DocsPage() {
  return (
    <>
      <Title />
      <Description />
      <Primary />
      <ArgTypes />
      <Stories includePrimary={false} />
    </>
  );
}
