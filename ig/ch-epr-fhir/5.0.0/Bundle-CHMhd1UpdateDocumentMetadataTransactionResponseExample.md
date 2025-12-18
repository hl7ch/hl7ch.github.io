# CH MHD-1 Update Document Metadata Transaction Response Example - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH MHD-1 Update Document Metadata Transaction Response Example**

## Example Bundle: CH MHD-1 Update Document Metadata Transaction Response Example



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "CHMhd1UpdateDocumentMetadataTransactionResponseExample",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-1-updatedocumentmetadatatransactionresponse"
    ]
  },
  "type" : "transaction-response",
  "link" : [
    {
      "relation" : "self",
      "url" : "http://example.org/fhir"
    }
  ],
  "entry" : [
    {
      "response" : {
        "status" : "200 OK",
        "location" : "DocumentReference/DocRefPdf/_history/2",
        "etag" : "2"
      }
    }
  ]
}

```
