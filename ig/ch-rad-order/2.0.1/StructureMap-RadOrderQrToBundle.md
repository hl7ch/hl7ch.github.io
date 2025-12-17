# RadOrderQrToBundle - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **RadOrderQrToBundle**

## StructureMap: RadOrderQrToBundle 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/StructureMap/RadOrderQrToBundle | *Version*:2.0.1 |
| Draft as of 2025-12-17 | *Computable Name*:RadOrderQrToBundle |
| **Copyright/Legal**: CC0-1.0 | |

 
Radiologoy QuestionnaireResponse to Bundle Derived from ORF QuestionnaireResponse to Bundle 2021-01-11 Oliver Egger, copyright ahdis ag, Apache License QRF Questionnaire: http://fhir.ch/ig/ch-orf/Questionnaire-order-referral-form.html QRF QuestionnaireResponse: http://fhir.ch/ig/ch-orf/QuestionnaireResponse-order-referral-form.xml.html Bundle: http://fhir.ch/ig/ch-orf/StructureDefinition-ch-orf-document.html 



## Resource Content

```json
{
  "resourceType" : "StructureMap",
  "id" : "RadOrderQrToBundle",
  "url" : "http://fhir.ch/ig/ch-rad-order/StructureMap/RadOrderQrToBundle",
  "version" : "2.0.1",
  "name" : "RadOrderQrToBundle",
  "status" : "draft",
  "date" : "2025-12-17T07:17:47+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Radiologoy QuestionnaireResponse to Bundle\r\nDerived from ORF QuestionnaireResponse to Bundle\r\n2021-01-11 Oliver Egger, copyright ahdis ag, Apache License\r\nQRF Questionnaire: http://fhir.ch/ig/ch-orf/Questionnaire-order-referral-form.html\r\nQRF QuestionnaireResponse: http://fhir.ch/ig/ch-orf/QuestionnaireResponse-order-referral-form.xml.html\r\nBundle: http://fhir.ch/ig/ch-orf/StructureDefinition-ch-orf-document.html",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "structure" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse",
      "mode" : "source",
      "alias" : "QuestionnaireResponse"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Bundle",
      "mode" : "target",
      "alias" : "Bundle"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Composition",
      "mode" : "target",
      "alias" : "Composition"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Patient",
      "mode" : "target",
      "alias" : "Patient"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson",
      "mode" : "target",
      "alias" : "RelatedPerson"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Organization",
      "mode" : "target",
      "alias" : "Organization"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Practitioner",
      "mode" : "target",
      "alias" : "Practitioner"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/PractitionerRole",
      "mode" : "target",
      "alias" : "PractitionerRole"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/ServiceRequest",
      "mode" : "target",
      "alias" : "ServiceRequest"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Extension",
      "mode" : "target",
      "alias" : "Extension"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/EpisodeOfCare",
      "mode" : "target",
      "alias" : "EpisodeOfCare"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse",
      "mode" : "target",
      "alias" : "QuestionnaireResponseTarget"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse",
      "mode" : "source",
      "alias" : "QuestionnaireResponse"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Bundle",
      "mode" : "target",
      "alias" : "Bundle"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Patient",
      "mode" : "target",
      "alias" : "Patient"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Organization",
      "mode" : "target",
      "alias" : "Organization"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Practitioner",
      "mode" : "target",
      "alias" : "Practitioner"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/PractitionerRole",
      "mode" : "target",
      "alias" : "PractitionerRole"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/ServiceRequest",
      "mode" : "target",
      "alias" : "ServiceRequest"
    }
  ],
  "import" : ["http://fhir.ch/ig/ch-orf/StructureMap/OrfQrToBundle"],
  "group" : [
    {
      "name" : "RadOrderQrToBundle",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "qr",
          "type" : "QuestionnaireResponse",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "documentIdentifier",
          "source" : [
            {
              "context" : "qr"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "documentIdentifier"
            },
            {
              "context" : "documentIdentifier",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:ietf:rfc:3986"
                }
              ]
            },
            {
              "contextType" : "variable",
              "variable" : "uuidDoc",
              "transform" : "uuid"
            },
            {
              "context" : "documentIdentifier",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuidDoc"
                }
              ]
            }
          ]
        },
        {
          "name" : "orfbundle",
          "source" : [
            {
              "context" : "qr",
              "variable" : "qrcp"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e"
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "composition",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Composition"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid",
              "transform" : "uuid"
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "title",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "Radiologieauftrag"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "type",
              "variable" : "type"
            },
            {
              "context" : "type",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "2161000195103"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.16.756.5.30.1.127.3.4"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "display",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "Imaging order (record artifact)"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "category",
              "variable" : "category"
            },
            {
              "context" : "category",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "721963009"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://snomed.info/sct"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "display",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "Order (record artifact)"
                }
              ]
            },
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e2"
            },
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "timestamp",
              "variable" : "timestamp",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "now()"
                }
              ]
            },
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "type",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "document"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "date",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueId" : "timestamp"
                }
              ]
            },
            {
              "context" : "e2",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "patient",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Patient"
                }
              ]
            },
            {
              "context" : "patient",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid2",
              "transform" : "uuid"
            },
            {
              "context" : "e2",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid2"
                }
              ]
            },
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "questionnaireresp",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "QuestionnaireResponse"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "questionnaireresp",
              "source" : [
                {
                  "context" : "qr"
                }
              ],
              "dependent" : [
                {
                  "name" : "QuestionnaireResponseMap",
                  "variable" : ["qr", "questionnaireresp"]
                }
              ]
            },
            {
              "name" : "servicerequest",
              "source" : [
                {
                  "context" : "qr"
                }
              ],
              "target" : [
                {
                  "context" : "questionnaireresp",
                  "contextType" : "variable",
                  "element" : "id",
                  "variable" : "uuid4",
                  "transform" : "uuid"
                },
                {
                  "context" : "e4",
                  "contextType" : "variable",
                  "element" : "fullUrl",
                  "transform" : "append",
                  "parameter" : [
                    {
                      "valueString" : "urn:uuid:"
                    },
                    {
                      "valueId" : "uuid4"
                    }
                  ]
                },
                {
                  "context" : "bundle",
                  "contextType" : "variable",
                  "element" : "entry",
                  "variable" : "e5"
                },
                {
                  "context" : "e5",
                  "contextType" : "variable",
                  "element" : "resource",
                  "variable" : "servicerequest",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "ServiceRequest"
                    }
                  ]
                },
                {
                  "context" : "servicerequest",
                  "contextType" : "variable",
                  "element" : "id",
                  "variable" : "uuid5",
                  "transform" : "uuid"
                },
                {
                  "context" : "e5",
                  "contextType" : "variable",
                  "element" : "fullUrl",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "'urn:uuid:' + %uuid5"
                    }
                  ]
                }
              ],
              "rule" : [
                {
                  "name" : "composition",
                  "source" : [
                    {
                      "context" : "qr"
                    }
                  ],
                  "dependent" : [
                    {
                      "name" : "OrfComposition",
                      "variable" : [
                        "qr",
                        "composition",
                        "patient",
                        "questionnaireresp",
                        "servicerequest",
                        "bundle"
                      ]
                    }
                  ]
                },
                {
                  "name" : "orf",
                  "source" : [
                    {
                      "context" : "qr"
                    }
                  ],
                  "dependent" : [
                    {
                      "name" : "QrToGroups",
                      "variable" : [
                        "questionnaireresp",
                        "patient",
                        "bundle",
                        "composition",
                        "servicerequest"
                      ]
                    }
                  ]
                },
                {
                  "name" : "servicerequest",
                  "source" : [
                    {
                      "context" : "qr"
                    }
                  ],
                  "dependent" : [
                    {
                      "name" : "RadOrderQrToServiceRequest",
                      "variable" : [
                        "questionnaireresp",
                        "patient",
                        "bundle",
                        "composition",
                        "servicerequest"
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "RadOrderQrToServiceRequest",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "qr",
          "type" : "QuestionnaireResponse",
          "mode" : "source"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "composition",
          "type" : "Composition",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "requestedService",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'requestedService'"
            }
          ],
          "dependent" : [
            {
              "name" : "RequestedServiceItems",
              "variable" : ["grp", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "reason",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'reason'"
            }
          ],
          "dependent" : [
            {
              "name" : "ReasonServiceItems",
              "variable" : ["grp", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "imagingService",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'imagingService'"
            }
          ],
          "dependent" : [
            {
              "name" : "ImagingServiceItems",
              "variable" : ["grp", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "orderDetail",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'orderDetail'"
            }
          ],
          "dependent" : [
            {
              "name" : "OrderDetailServiceItems",
              "variable" : ["grp", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "desiredRadiologist",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'desiredRadiologist'"
            }
          ],
          "dependent" : [
            {
              "name" : "DesiredRadiologistServiceItems",
              "variable" : ["grp", "bundle", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "diagnosisList",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'diagnosisList'"
            }
          ],
          "dependent" : [
            {
              "name" : "DiagnosisListServiceItems",
              "variable" : ["grp", "patient", "bundle", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "Caveat",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'caveat'"
            }
          ],
          "dependent" : [
            {
              "name" : "CaveatServiceItems",
              "variable" : ["grp", "patient", "bundle", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "previousResults",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'previousResults'"
            }
          ],
          "rule" : [
            {
              "name" : "attachment",
              "source" : [
                {
                  "context" : "grp",
                  "element" : "item",
                  "variable" : "grp",
                  "condition" : "linkId = 'attachedFile'"
                }
              ],
              "dependent" : [
                {
                  "name" : "PreviousImagingStudyResultsNonDicom",
                  "variable" : ["grp", "bundle", "serviceRequest", "patient"]
                }
              ]
            },
            {
              "name" : "attachment",
              "source" : [
                {
                  "context" : "grp",
                  "element" : "item",
                  "variable" : "grp",
                  "condition" : "linkId = 'dicomObject'"
                }
              ],
              "dependent" : [
                {
                  "name" : "PreviousImagingStudyResults",
                  "variable" : ["grp", "bundle", "serviceRequest", "patient"]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "RequestedServiceItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'requestedService.service') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerCalueCoding",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "requestedServiceService",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "coding"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "cc"
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "coding",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "coding"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "ReasonServiceItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'reason.question') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "reasonQuestion",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "string",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "reasonCode",
                      "variable" : "reasonCode"
                    },
                    {
                      "context" : "reasonCode",
                      "contextType" : "variable",
                      "element" : "text",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "ImagingServiceItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'imagingService.type') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueCoding",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "requestedServiceService",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "coding"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "coding",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "coding"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "OrderDetailServiceItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'orderDetail.imagingRegion') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueCoding",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "orderDetailImagingRegion",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "coding"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "orderDetail",
                      "variable" : "cc"
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext"
                    },
                    {
                      "context" : "ext",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-order-detail-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-order-detail-type"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "imagingRegion"
                        }
                      ]
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "coding",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "coding"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'orderDetail.imagingFocus') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueCoding",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "orderDetailImagingFocus",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "coding"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "bodySite",
                      "variable" : "cc"
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "coding",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "coding"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'orderDetail.laterality') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueCoding",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "orderDetailLaterality",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "coding"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "orderDetail",
                      "variable" : "cc"
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext"
                    },
                    {
                      "context" : "ext",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-order-detail-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-order-detail-type"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "laterality"
                        }
                      ]
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "coding",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "coding"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'orderDetail.viewType') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueCoding",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "orderDetailViewType",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "coding"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "orderDetail",
                      "variable" : "cc"
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext"
                    },
                    {
                      "context" : "ext",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-order-detail-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-order-detail-type"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "viewType"
                        }
                      ]
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "coding",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "coding"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'orderDetail.maneuverType') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueCoding",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "orderDetailManeuverType",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "coding"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "orderDetail",
                      "variable" : "cc"
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext"
                    },
                    {
                      "context" : "ext",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-order-detail-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-order-detail-type"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "maneuverType"
                        }
                      ]
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "coding",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "coding"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'orderDetail.guidanceForAction') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueCoding",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "orderDetailGuidanceForAction",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "coding"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "orderDetail",
                      "variable" : "cc"
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext"
                    },
                    {
                      "context" : "ext",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-order-detail-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-order-detail-type"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "guidanceForAction"
                        }
                      ]
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "coding",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "coding"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "DesiredRadiologistServiceItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "serviceRequestPerformer",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e"
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "practitioner",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Practitioner"
                }
              ]
            },
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid",
              "transform" : "uuid"
            },
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "performer",
              "variable" : "performer"
            },
            {
              "context" : "performer",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid"
                }
              ]
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "item",
              "source" : [
                {
                  "context" : "src",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'desiredRadiologist.familyName') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "practitioner",
                  "contextType" : "variable",
                  "element" : "name",
                  "variable" : "name",
                  "listMode" : ["share"],
                  "listRuleId" : "name"
                },
                {
                  "context" : "name",
                  "contextType" : "variable",
                  "element" : "family",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "item",
              "source" : [
                {
                  "context" : "src",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'desiredRadiologist.givenName') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "practitioner",
                  "contextType" : "variable",
                  "element" : "name",
                  "variable" : "name",
                  "listMode" : ["share"],
                  "listRuleId" : "name"
                },
                {
                  "context" : "name",
                  "contextType" : "variable",
                  "element" : "given",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "DiagnosisListServiceItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'diagnosisList.primaryDiagnosis') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "diagnosisListPrimaryDiagnosis",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "string",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "condition",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Condition"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "reasonReference",
                      "variable" : "reasonReference"
                    },
                    {
                      "context" : "reasonReference",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "problem-list-item"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/condition-category"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Problem List Item"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "text",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'diagnosisList.secondaryDiagnosis') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "diagnosisListSecondaryDiagnosis",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "string",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "condition",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Condition"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "problem-list-item"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/condition-category"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Problem List Item"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "text",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'diagnosisList.bodyHeight') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "observationBodyHeight",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Quantity",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "observation",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Observation"
                        }
                      ]
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "status",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "final"
                        }
                      ]
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "status",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "final"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "vital-signs"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/observation-category"
                        }
                      ]
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "cc"
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "c"
                    },
                    {
                      "context" : "c",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://loinc.org"
                        }
                      ]
                    },
                    {
                      "context" : "c",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "8302-2"
                        }
                      ]
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'diagnosisList.bodyWeight') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "observationBbodyWeight",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Quantity",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "observation",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Observation"
                        }
                      ]
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "status",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "final"
                        }
                      ]
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "status",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "final"
                        }
                      ]
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "vital-signs"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/observation-category"
                        }
                      ]
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "cc"
                    },
                    {
                      "context" : "cc",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "c"
                    },
                    {
                      "context" : "c",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://loinc.org"
                        }
                      ]
                    },
                    {
                      "context" : "c",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "29463-7"
                        }
                      ]
                    },
                    {
                      "context" : "observation",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "CaveatServiceItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'caveatList.bloodCoagulation') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "bloodCoagulation",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "condition",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Condition"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext1"
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "64779008"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Blood coagulation disorder (disorder)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext2"
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value"
                        }
                      ]
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "problem-list-item"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/condition-category"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Problem List Item"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding2"
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "64779008"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Blood coagulation disorder (disorder)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ],
                  "rule" : [
                    {
                      "name" : "caveatBloodCoagulationINR",
                      "source" : [
                        {
                          "context" : "answer",
                          "element" : "item",
                          "variable" : "subitem",
                          "condition" : "(linkId.value = 'caveatList.bloodCoagulation.INR')"
                        }
                      ],
                      "target" : [
                        {
                          "context" : "bundle",
                          "contextType" : "variable",
                          "element" : "entry",
                          "variable" : "e"
                        },
                        {
                          "context" : "e",
                          "contextType" : "variable",
                          "element" : "resource",
                          "variable" : "observation",
                          "transform" : "create",
                          "parameter" : [
                            {
                              "valueString" : "Observation"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "id",
                          "variable" : "uuid",
                          "transform" : "uuid"
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "status",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "final"
                            }
                          ]
                        },
                        {
                          "context" : "e",
                          "contextType" : "variable",
                          "element" : "fullUrl",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "'urn:uuid:' + %uuid"
                            }
                          ]
                        },
                        {
                          "context" : "condition",
                          "contextType" : "variable",
                          "element" : "evidence",
                          "variable" : "evidence"
                        },
                        {
                          "context" : "evidence",
                          "contextType" : "variable",
                          "element" : "detail",
                          "variable" : "detail"
                        },
                        {
                          "context" : "detail",
                          "contextType" : "variable",
                          "element" : "reference",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "'urn:uuid:' + %uuid"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "code",
                          "variable" : "cc"
                        },
                        {
                          "context" : "cc",
                          "contextType" : "variable",
                          "element" : "coding",
                          "variable" : "c"
                        },
                        {
                          "context" : "c",
                          "contextType" : "variable",
                          "element" : "system",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "http://loinc.org"
                            }
                          ]
                        },
                        {
                          "context" : "c",
                          "contextType" : "variable",
                          "element" : "code",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "34714-6"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "subject",
                          "variable" : "subject"
                        },
                        {
                          "context" : "subject",
                          "contextType" : "variable",
                          "element" : "reference",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "'urn:uuid:' + %patient.id"
                            }
                          ]
                        }
                      ],
                      "rule" : [
                        {
                          "name" : "caveatBloodCoagulationINRQuantity",
                          "source" : [
                            {
                              "context" : "subitem",
                              "element" : "item",
                              "variable" : "quantityitem",
                              "condition" : "((linkId.value = 'caveatList.bloodCoagulation.INR.quantity') and answer.exists())"
                            }
                          ],
                          "rule" : [
                            {
                              "name" : "caveatBloodCoagulationINRQuantityValue",
                              "source" : [
                                {
                                  "context" : "quantityitem",
                                  "element" : "answer",
                                  "variable" : "answer"
                                }
                              ],
                              "rule" : [
                                {
                                  "name" : "value",
                                  "source" : [
                                    {
                                      "context" : "answer",
                                      "type" : "Quantity",
                                      "element" : "value",
                                      "variable" : "value"
                                    }
                                  ],
                                  "target" : [
                                    {
                                      "context" : "observation",
                                      "contextType" : "variable",
                                      "element" : "value",
                                      "transform" : "copy",
                                      "parameter" : [
                                        {
                                          "valueId" : "value"
                                        }
                                      ]
                                    }
                                  ]
                                }
                              ]
                            }
                          ]
                        },
                        {
                          "name" : "caveatBloodCoagulationINRDateTime",
                          "source" : [
                            {
                              "context" : "subitem",
                              "element" : "item",
                              "variable" : "datetimeitem",
                              "condition" : "((linkId.value = 'caveatList.bloodCoagulation.INR.dateTime') and answer.exists())"
                            }
                          ],
                          "rule" : [
                            {
                              "name" : "caveatBloodCoagulationINRDateTimeValue",
                              "source" : [
                                {
                                  "context" : "datetimeitem",
                                  "element" : "answer",
                                  "variable" : "answer"
                                }
                              ],
                              "rule" : [
                                {
                                  "name" : "value",
                                  "source" : [
                                    {
                                      "context" : "answer",
                                      "type" : "dateTime",
                                      "element" : "value",
                                      "variable" : "value"
                                    }
                                  ],
                                  "target" : [
                                    {
                                      "context" : "observation",
                                      "contextType" : "variable",
                                      "element" : "effective",
                                      "transform" : "copy",
                                      "parameter" : [
                                        {
                                          "valueId" : "value"
                                        }
                                      ]
                                    }
                                  ]
                                }
                              ]
                            }
                          ]
                        }
                      ]
                    },
                    {
                      "name" : "caveatBloodCoagulationINR",
                      "source" : [
                        {
                          "context" : "answer",
                          "element" : "item",
                          "variable" : "subitem",
                          "condition" : "(linkId.value = 'caveatList.bloodCoagulation.platelets')"
                        }
                      ],
                      "target" : [
                        {
                          "context" : "bundle",
                          "contextType" : "variable",
                          "element" : "entry",
                          "variable" : "e"
                        },
                        {
                          "context" : "e",
                          "contextType" : "variable",
                          "element" : "resource",
                          "variable" : "observation",
                          "transform" : "create",
                          "parameter" : [
                            {
                              "valueString" : "Observation"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "id",
                          "variable" : "uuid",
                          "transform" : "uuid"
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "status",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "final"
                            }
                          ]
                        },
                        {
                          "context" : "e",
                          "contextType" : "variable",
                          "element" : "fullUrl",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "'urn:uuid:' + %uuid"
                            }
                          ]
                        },
                        {
                          "context" : "condition",
                          "contextType" : "variable",
                          "element" : "evidence",
                          "variable" : "evidence"
                        },
                        {
                          "context" : "evidence",
                          "contextType" : "variable",
                          "element" : "detail",
                          "variable" : "detail"
                        },
                        {
                          "context" : "detail",
                          "contextType" : "variable",
                          "element" : "reference",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "'urn:uuid:' + %uuid"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "code",
                          "variable" : "cc"
                        },
                        {
                          "context" : "cc",
                          "contextType" : "variable",
                          "element" : "coding",
                          "variable" : "c"
                        },
                        {
                          "context" : "c",
                          "contextType" : "variable",
                          "element" : "system",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "http://loinc.org"
                            }
                          ]
                        },
                        {
                          "context" : "c",
                          "contextType" : "variable",
                          "element" : "code",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "26515-7"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "subject",
                          "variable" : "subject"
                        },
                        {
                          "context" : "subject",
                          "contextType" : "variable",
                          "element" : "reference",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "'urn:uuid:' + %patient.id"
                            }
                          ]
                        }
                      ],
                      "rule" : [
                        {
                          "name" : "caveatBloodCoagulationINRPlatelets",
                          "source" : [
                            {
                              "context" : "subitem",
                              "element" : "item",
                              "variable" : "quantityitem",
                              "condition" : "((linkId.value = 'caveatList.bloodCoagulation.platelets.quantity') and answer.exists())"
                            }
                          ],
                          "rule" : [
                            {
                              "name" : "caveatBloodCoagulationINRPlateletsValue",
                              "source" : [
                                {
                                  "context" : "quantityitem",
                                  "element" : "answer",
                                  "variable" : "answer"
                                }
                              ],
                              "rule" : [
                                {
                                  "name" : "value",
                                  "source" : [
                                    {
                                      "context" : "answer",
                                      "type" : "Quantity",
                                      "element" : "value",
                                      "variable" : "value"
                                    }
                                  ],
                                  "target" : [
                                    {
                                      "context" : "observation",
                                      "contextType" : "variable",
                                      "element" : "value",
                                      "transform" : "copy",
                                      "parameter" : [
                                        {
                                          "valueId" : "value"
                                        }
                                      ]
                                    }
                                  ]
                                }
                              ]
                            }
                          ]
                        },
                        {
                          "name" : "caveatBloodCoagulationINRPlatelets",
                          "source" : [
                            {
                              "context" : "subitem",
                              "element" : "item",
                              "variable" : "datetimeitem",
                              "condition" : "((linkId.value = 'caveatList.bloodCoagulation.platelets.dateTime') and answer.exists())"
                            }
                          ],
                          "rule" : [
                            {
                              "name" : "caveatBloodCoagulationINRPlateletsValue",
                              "source" : [
                                {
                                  "context" : "datetimeitem",
                                  "element" : "answer",
                                  "variable" : "answer"
                                }
                              ],
                              "rule" : [
                                {
                                  "name" : "value",
                                  "source" : [
                                    {
                                      "context" : "answer",
                                      "type" : "dateTime",
                                      "element" : "value",
                                      "variable" : "value"
                                    }
                                  ],
                                  "target" : [
                                    {
                                      "context" : "observation",
                                      "contextType" : "variable",
                                      "element" : "effective",
                                      "transform" : "copy",
                                      "parameter" : [
                                        {
                                          "valueId" : "value"
                                        }
                                      ]
                                    }
                                  ]
                                }
                              ]
                            }
                          ]
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'caveatList.renalInsufficiency') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "bloodCoagulation",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "condition",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Condition"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext1"
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "723188008"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Renal insufficiency (disorder)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext2"
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value"
                        }
                      ]
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "problem-list-item"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/condition-category"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Problem List Item"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding2"
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "723188008"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Renal insufficiency (disorder)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ],
                  "rule" : [
                    {
                      "name" : "caveatListRenalInsufficiencyCreatinineClearanceINR",
                      "source" : [
                        {
                          "context" : "answer",
                          "element" : "item",
                          "variable" : "subitem",
                          "condition" : "(linkId.value = 'caveatList.renalInsufficiency.creatinineClearance')"
                        }
                      ],
                      "target" : [
                        {
                          "context" : "bundle",
                          "contextType" : "variable",
                          "element" : "entry",
                          "variable" : "e"
                        },
                        {
                          "context" : "e",
                          "contextType" : "variable",
                          "element" : "resource",
                          "variable" : "observation",
                          "transform" : "create",
                          "parameter" : [
                            {
                              "valueString" : "Observation"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "status",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "final"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "id",
                          "variable" : "uuid",
                          "transform" : "uuid"
                        },
                        {
                          "context" : "e",
                          "contextType" : "variable",
                          "element" : "fullUrl",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "'urn:uuid:' + %uuid"
                            }
                          ]
                        },
                        {
                          "context" : "condition",
                          "contextType" : "variable",
                          "element" : "evidence",
                          "variable" : "evidence"
                        },
                        {
                          "context" : "evidence",
                          "contextType" : "variable",
                          "element" : "detail",
                          "variable" : "detail"
                        },
                        {
                          "context" : "detail",
                          "contextType" : "variable",
                          "element" : "reference",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "'urn:uuid:' + %uuid"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "code",
                          "variable" : "cc"
                        },
                        {
                          "context" : "cc",
                          "contextType" : "variable",
                          "element" : "coding",
                          "variable" : "c"
                        },
                        {
                          "context" : "c",
                          "contextType" : "variable",
                          "element" : "system",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "http://loinc.org"
                            }
                          ]
                        },
                        {
                          "context" : "c",
                          "contextType" : "variable",
                          "element" : "code",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "33558-8"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "subject",
                          "variable" : "subject"
                        },
                        {
                          "context" : "subject",
                          "contextType" : "variable",
                          "element" : "reference",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "'urn:uuid:' + %patient.id"
                            }
                          ]
                        }
                      ],
                      "rule" : [
                        {
                          "name" : "caveatListRenalInsufficiencyCreatinineClearanceQuantity",
                          "source" : [
                            {
                              "context" : "subitem",
                              "element" : "item",
                              "variable" : "quantityitem",
                              "condition" : "((linkId.value = 'caveatList.renalInsufficiency.creatinineClearance.quantity') and answer.exists())"
                            }
                          ],
                          "rule" : [
                            {
                              "name" : "caveatListRenalInsufficiencyCreatinineClearanceQuantityValue",
                              "source" : [
                                {
                                  "context" : "quantityitem",
                                  "element" : "answer",
                                  "variable" : "answer"
                                }
                              ],
                              "rule" : [
                                {
                                  "name" : "value",
                                  "source" : [
                                    {
                                      "context" : "answer",
                                      "type" : "Quantity",
                                      "element" : "value",
                                      "variable" : "value"
                                    }
                                  ],
                                  "target" : [
                                    {
                                      "context" : "observation",
                                      "contextType" : "variable",
                                      "element" : "value",
                                      "transform" : "copy",
                                      "parameter" : [
                                        {
                                          "valueId" : "value"
                                        }
                                      ]
                                    }
                                  ]
                                }
                              ]
                            }
                          ]
                        },
                        {
                          "name" : "caveatListRenalInsufficiencyCreatinineClearancedateTime",
                          "source" : [
                            {
                              "context" : "subitem",
                              "element" : "item",
                              "variable" : "datetimeitem",
                              "condition" : "((linkId.value = 'caveatList.renalInsufficiency.creatinineClearance.dateTime') and answer.exists())"
                            }
                          ],
                          "rule" : [
                            {
                              "name" : "caveatListRenalInsufficiencyCreatinineClearanceDateTimeValue",
                              "source" : [
                                {
                                  "context" : "datetimeitem",
                                  "element" : "answer",
                                  "variable" : "answer"
                                }
                              ],
                              "rule" : [
                                {
                                  "name" : "value",
                                  "source" : [
                                    {
                                      "context" : "answer",
                                      "type" : "dateTime",
                                      "element" : "value",
                                      "variable" : "value"
                                    }
                                  ],
                                  "target" : [
                                    {
                                      "context" : "observation",
                                      "contextType" : "variable",
                                      "element" : "effective",
                                      "transform" : "copy",
                                      "parameter" : [
                                        {
                                          "valueId" : "value"
                                        }
                                      ]
                                    }
                                  ]
                                }
                              ]
                            }
                          ]
                        }
                      ]
                    },
                    {
                      "name" : "caveatListRenalInsufficiencyCreatinine",
                      "source" : [
                        {
                          "context" : "answer",
                          "element" : "item",
                          "variable" : "subitem",
                          "condition" : "(linkId.value = 'caveatList.renalInsufficiency.creatinine')"
                        }
                      ],
                      "target" : [
                        {
                          "context" : "bundle",
                          "contextType" : "variable",
                          "element" : "entry",
                          "variable" : "e"
                        },
                        {
                          "context" : "e",
                          "contextType" : "variable",
                          "element" : "resource",
                          "variable" : "observation",
                          "transform" : "create",
                          "parameter" : [
                            {
                              "valueString" : "Observation"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "status",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "final"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "id",
                          "variable" : "uuid",
                          "transform" : "uuid"
                        },
                        {
                          "context" : "e",
                          "contextType" : "variable",
                          "element" : "fullUrl",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "'urn:uuid:' + %uuid"
                            }
                          ]
                        },
                        {
                          "context" : "condition",
                          "contextType" : "variable",
                          "element" : "evidence",
                          "variable" : "evidence"
                        },
                        {
                          "context" : "evidence",
                          "contextType" : "variable",
                          "element" : "detail",
                          "variable" : "detail"
                        },
                        {
                          "context" : "detail",
                          "contextType" : "variable",
                          "element" : "reference",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "'urn:uuid:' + %uuid"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "code",
                          "variable" : "cc"
                        },
                        {
                          "context" : "cc",
                          "contextType" : "variable",
                          "element" : "coding",
                          "variable" : "c"
                        },
                        {
                          "context" : "c",
                          "contextType" : "variable",
                          "element" : "system",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "http://loinc.org"
                            }
                          ]
                        },
                        {
                          "context" : "c",
                          "contextType" : "variable",
                          "element" : "code",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "77140-2"
                            }
                          ]
                        },
                        {
                          "context" : "observation",
                          "contextType" : "variable",
                          "element" : "subject",
                          "variable" : "subject"
                        },
                        {
                          "context" : "subject",
                          "contextType" : "variable",
                          "element" : "reference",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "'urn:uuid:' + %patient.id"
                            }
                          ]
                        }
                      ],
                      "rule" : [
                        {
                          "name" : "caveatListRenalInsufficiencyCreatinine",
                          "source" : [
                            {
                              "context" : "subitem",
                              "element" : "item",
                              "variable" : "quantityitem",
                              "condition" : "((linkId.value = 'caveatList.renalInsufficiency.creatinine.quantity') and answer.exists())"
                            }
                          ],
                          "rule" : [
                            {
                              "name" : "caveatListRenalInsufficiencyCreatinineValue",
                              "source" : [
                                {
                                  "context" : "quantityitem",
                                  "element" : "answer",
                                  "variable" : "answer"
                                }
                              ],
                              "rule" : [
                                {
                                  "name" : "value",
                                  "source" : [
                                    {
                                      "context" : "answer",
                                      "type" : "Quantity",
                                      "element" : "value",
                                      "variable" : "value"
                                    }
                                  ],
                                  "target" : [
                                    {
                                      "context" : "observation",
                                      "contextType" : "variable",
                                      "element" : "value",
                                      "transform" : "copy",
                                      "parameter" : [
                                        {
                                          "valueId" : "value"
                                        }
                                      ]
                                    }
                                  ]
                                }
                              ]
                            }
                          ]
                        },
                        {
                          "name" : "caveatBloodCoagulationINRPlatelets",
                          "source" : [
                            {
                              "context" : "subitem",
                              "element" : "item",
                              "variable" : "datetimeitem",
                              "condition" : "((linkId.value = 'caveatList.renalInsufficiency.creatinine.dateTime') and answer.exists())"
                            }
                          ],
                          "rule" : [
                            {
                              "name" : "caveatListRenalInsufficiencyCreatininevalue",
                              "source" : [
                                {
                                  "context" : "datetimeitem",
                                  "element" : "answer",
                                  "variable" : "answer"
                                }
                              ],
                              "rule" : [
                                {
                                  "name" : "value",
                                  "source" : [
                                    {
                                      "context" : "answer",
                                      "type" : "dateTime",
                                      "element" : "value",
                                      "variable" : "value"
                                    }
                                  ],
                                  "target" : [
                                    {
                                      "context" : "observation",
                                      "contextType" : "variable",
                                      "element" : "effective",
                                      "transform" : "copy",
                                      "parameter" : [
                                        {
                                          "valueId" : "value"
                                        }
                                      ]
                                    }
                                  ]
                                }
                              ]
                            }
                          ]
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'caveatList.claustrophobia') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "caveatListClaustrophobia",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "condition",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Condition"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext1"
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "19887002"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Claustrophobia (finding)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext2"
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value"
                        }
                      ]
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "problem-list-item"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/condition-category"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Problem List Item"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding2"
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "19887002"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Claustrophobia (finding)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'caveatList.bodyPiercing') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "caveatListBodyPiercing",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "condition",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Condition"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext1"
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "879862001"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Body piercing (finding)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext2"
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value"
                        }
                      ]
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "problem-list-item"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/condition-category"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Problem List Item"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding2"
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "879862001"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Body piercing (finding)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'caveatList.device') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "caveatListDevice",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "condition",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Condition"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext1"
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "397578001"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Device in situ (finding)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext2"
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value"
                        }
                      ]
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "52101004"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Present (qualifier value)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "problem-list-item"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/condition-category"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Problem List Item"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "coding",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'caveatList.hyperthyroidism') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "caveatListHyperthyroidism",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "condition",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Condition"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext1"
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "34486009"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Hyperthyroidism (disorder)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext2"
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value"
                        }
                      ]
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "problem-list-item"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/condition-category"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Problem List Item"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding2"
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "34486009"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Hyperthyroidism (disorder)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'caveatList.diabetes') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "caveatListDiabetes",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "condition",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Condition"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext1"
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "73211009"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Diabetes mellitus (disorder)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext2"
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value"
                        }
                      ]
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "problem-list-item"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/condition-category"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Problem List Item"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding2"
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "73211009"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Diabetes mellitus (disorder)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'caveatList.gravida') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "caveatListGravida",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "condition",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Condition"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext1"
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "366321006"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Finding of gravida (finding)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext2"
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value"
                        }
                      ]
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "problem-list-item"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/condition-category"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Problem List Item"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding2"
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "366321006"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Finding of gravida (finding)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'caveatList.contrastMediaAllergy') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "caveatListContrastMediaAllergy",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "condition",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Condition"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext1"
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "293637006"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Allergy to contrast media (finding)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext2"
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value"
                        }
                      ]
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "problem-list-item"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/condition-category"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Problem List Item"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding2"
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "293637006"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Allergy to contrast media (finding)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "DrugPrescription",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'caveatList.drugPrescription')"
            }
          ],
          "dependent" : [
            {
              "name" : "DesiredRadiologistServiceItemsDrugDescription",
              "variable" : ["item", "bundle", "serviceRequest", "patient"]
            }
          ]
        }
      ]
    },
    {
      "name" : "DesiredRadiologistServiceItemsDrugDescription",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "caveatListDrugPrescriptionMetformin",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'caveatList.drugPrescription.metformin')"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "caveatListDrugPrescription",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "condition",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Condition"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext1"
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "182817000"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Drug prescription (situation)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext2"
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value"
                        }
                      ]
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "problem-list-item"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/condition-category"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Problem List Item"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding2"
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "372567009"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Metformin (substance)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "caveatListDrugPrescriptionBetaBlocker",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'caveatList.drugPrescription.betaBlocker')"
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "caveatListDrugPrescription",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "condition",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Condition"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "supportingInfo",
                      "variable" : "supportingInfo"
                    },
                    {
                      "context" : "supportingInfo",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext1"
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type"
                        }
                      ]
                    },
                    {
                      "context" : "ext1",
                      "contextType" : "variable",
                      "element" : "value",
                      "variable" : "coding",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coding"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "182817000"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Drug prescription (situation)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "ext2"
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value"
                        }
                      ]
                    },
                    {
                      "context" : "ext2",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "category",
                      "variable" : "category"
                    },
                    {
                      "context" : "category",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "problem-list-item"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://terminology.hl7.org/CodeSystem/condition-category"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Problem List Item"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "code",
                      "variable" : "code"
                    },
                    {
                      "context" : "code",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding2"
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "373254001"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://snomed.info/sct"
                        }
                      ]
                    },
                    {
                      "context" : "coding2",
                      "contextType" : "variable",
                      "element" : "display",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "Substance with beta adrenergic receptor antagonist mechanism of action (substance)"
                        }
                      ]
                    },
                    {
                      "context" : "condition",
                      "contextType" : "variable",
                      "element" : "subject",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "PreviousImagingStudyResultsNonDicom",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "item",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "item",
              "variable" : "item"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e"
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "documentReference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "DocumentReference"
                }
              ]
            },
            {
              "context" : "documentReference",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid",
              "transform" : "uuid"
            },
            {
              "context" : "documentReference",
              "contextType" : "variable",
              "element" : "subject",
              "variable" : "subject"
            },
            {
              "context" : "subject",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid"
                }
              ]
            },
            {
              "context" : "documentReference",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "current"
                }
              ]
            },
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "supportingInfo",
              "variable" : "supportingInfo"
            },
            {
              "context" : "supportingInfo",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "documentReference",
                  "contextType" : "variable",
                  "element" : "content",
                  "variable" : "content"
                },
                {
                  "context" : "content",
                  "contextType" : "variable",
                  "element" : "attachment",
                  "variable" : "attachment",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ],
              "rule" : [
                {
                  "name" : "description",
                  "source" : [
                    {
                      "context" : "answer",
                      "element" : "item",
                      "variable" : "dictomitem",
                      "condition" : "((linkId.value = 'attachedFile.description') and answer.exists())"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "documentReference",
                      "contextType" : "variable",
                      "element" : "description",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "%dictomitem.answer.value"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "PreviousImagingStudyResults",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "item",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "supportingInfo",
          "source" : [
            {
              "context" : "item",
              "variable" : "item"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e"
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "imagingStudy",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "ImagingStudy"
                }
              ]
            },
            {
              "context" : "imagingStudy",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid",
              "transform" : "uuid"
            },
            {
              "context" : "imagingStudy",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "available"
                }
              ]
            },
            {
              "context" : "imagingStudy",
              "contextType" : "variable",
              "element" : "subject",
              "variable" : "subject"
            },
            {
              "context" : "subject",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid"
                }
              ]
            },
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "subject",
              "variable" : "subject"
            },
            {
              "context" : "subject",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            },
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "supportingInfo",
              "variable" : "supportingInfo"
            },
            {
              "context" : "imagingStudy",
              "contextType" : "variable",
              "element" : "series",
              "variable" : "series"
            },
            {
              "context" : "series",
              "contextType" : "variable",
              "element" : "instance",
              "variable" : "instance"
            },
            {
              "context" : "supportingInfo",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "answerValueString",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "description",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "string",
                      "element" : "value",
                      "variable" : "value"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "imagingStudy",
                      "contextType" : "variable",
                      "element" : "description",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "value"
                        }
                      ]
                    }
                  ]
                }
              ]
            },
            {
              "name" : "uid",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "(linkId.value = 'dicomObject.sopInstanceUid') and answer.exists()"
                }
              ],
              "target" : [
                {
                  "context" : "instance",
                  "contextType" : "variable",
                  "element" : "uid",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "modality",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "(linkId.value = 'dicomObject.modality') and answer.exists()"
                }
              ],
              "target" : [
                {
                  "context" : "series",
                  "contextType" : "variable",
                  "element" : "modality",
                  "variable" : "modality"
                },
                {
                  "context" : "modality",
                  "contextType" : "variable",
                  "element" : "code",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value.code"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "uid",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "(linkId.value = 'dicomObject.studyInstanceUid') and answer.exists()"
                }
              ],
              "target" : [
                {
                  "context" : "imagingStudy",
                  "contextType" : "variable",
                  "element" : "identifier",
                  "variable" : "uid"
                },
                {
                  "context" : "uid",
                  "contextType" : "variable",
                  "element" : "type",
                  "variable" : "type"
                },
                {
                  "context" : "type",
                  "contextType" : "variable",
                  "element" : "coding",
                  "variable" : "coding"
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "urn:dicom:uid"
                    }
                  ]
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "code",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "PLAC"
                    }
                  ]
                },
                {
                  "context" : "uid",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "attachmentdicomSeriesInstanceUid",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "(linkId.value = 'dicomObject.SeriesInstanceUid') and answer.exists()"
                }
              ],
              "target" : [
                {
                  "context" : "series",
                  "contextType" : "variable",
                  "element" : "uid",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "acsn",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "(linkId.value = 'dicomObject.acsn') and answer.exists()"
                }
              ],
              "target" : [
                {
                  "context" : "imagingStudy",
                  "contextType" : "variable",
                  "element" : "identifier",
                  "variable" : "acsn"
                },
                {
                  "context" : "acsn",
                  "contextType" : "variable",
                  "element" : "type",
                  "variable" : "type"
                },
                {
                  "context" : "type",
                  "contextType" : "variable",
                  "element" : "coding",
                  "variable" : "coding"
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "http://terminology.hl7.org/CodeSystem/v2-0203"
                    }
                  ]
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "code",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "ACSN"
                    }
                  ]
                },
                {
                  "context" : "acsn",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    }
  ]
}

```
