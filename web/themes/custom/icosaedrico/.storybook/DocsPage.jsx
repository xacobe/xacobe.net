import React from 'react';
import { Title, Description, Primary, ArgTypes, Stories } from '@storybook/addon-docs/blocks';

export function DocsPage() {
  return (
    <>
      <Title />
      <Description />
      <Primary sourceState="hidden" />
      <ArgTypes />
      <Stories includePrimary={false} sourceState="hidden" />
    </>
  );
}
