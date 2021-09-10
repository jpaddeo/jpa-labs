import React from 'react';

import './LinkList.css';

const LinkList = ({ options = [] }) => {
  const linksMarkup = options.map(({ id, url, text }) => (
    <li key={id} className='link-list-item'>
      <a
        href={url}
        target='_blank'
        rel='noopener noreferrer'
        className='link-list-item-url'
      >
        {text}
      </a>
    </li>
  ));
  return <ul className='link-list'>{linksMarkup}</ul>;
};

export default LinkList;
