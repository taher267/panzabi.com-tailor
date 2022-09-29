export const orderFields = [
  {
    label: 'Order number',
    name: 'order_no',
    validation: { required: true },
    placeholder: 'Enter order number...',
    defaultError: `Order number is mandartory!`,
  },
  {
    label: 'Previouse Number',
    name: 'previous_order',
    placeholder: 'Enter previous number...',
  },
  {
    label: 'Quantity',
    name: 'quantity',
    type: 'number',
    min: 0,
    validation: { pattern: /[0-9]+$/, min: 1 },
    placeholder: 'Quantity...',
    defaultError: `Quantity (0-9)!`,
  },
  {
    label: 'Discunt',
    name: 'discunt',
    type: 'number',
    min: 0,
    validation: { pattern: /[0-9]+$/, min: 0 },
    placeholder: 'Discunt...',
    defaultError: `Discunt (0-9)!`,
  },
  {
    label: 'Advanced',
    name: 'advanced',
    type: 'number',
    min: 0,
    validation: { pattern: /[0-9]+$/, min: 0 },
    placeholder: 'Advanced...',
    defaultError: `Advanced (0-9)!`,
  },
  {
    label: 'Transport Charge',
    name: 'transport_charge',
    type: 'number',
    validation: { pattern: /[0-9]+$/, min: 0 },
    placeholder: 'Transport Charge...',
    defaultError: `Transport Charge (0-9)!`,
  },
];

export const orderMeasurementFields = [
  {
    label: 'Long',
    name: 'long',
    validation: { required: true },
    placeholder: 'Enter order number...',
    defaultError: `Order number is mandartory!`,
  },
  [
    {
      label: 'Body',
      name: 'body',
      min: 0,
      placeholder: 'Body...',
    },
    {
      label: 'Body Loose',
      name: 'body_loose',
      placeholder: 'Body...',
    },
  ],
  {
    label: 'Sholder',
    name: 'sholder',
    validation: { required: true },
    placeholder: 'Sholder...',
    defaultError: `Sholder is required`,
  },
  {
    label: 'Sleeve',
    name: 'sleeve',
    type: 'number',
    min: 0,
    placeholder: 'Sleeve...',
    defaultError: `Sleeve`,
  },
  {
    label: 'Sleeve cuff',
    name: 'sleeve_cuff',
    type: 'number',
    min: 0,
    placeholder: 'Sleeve cuff...',
    defaultError: `Sleeve cuff`,
  },
];

export const OrderStatusField = {
  label: 'Order Status',
  name: 'transport_charge',
  type: 'number',
  options: ['COMPLETED', 'ALTER', 'PROCESSING', 'NEW'],
  placeholder: 'Order Status...',
  defaultError: `Order Status (0-9)!`,
};
